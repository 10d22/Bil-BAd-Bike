<?php
include ('../includes/lib/WideImage.php');
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
}
?>
<h2>Redigere Redaktør</h2>
<?php
if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
}
if ($_SESSION['role'] > 1) {
    die(header('location: index.php'));
}



if (isset($_POST['category_submit'])) {
    $navn = $_POST['category_name'];
    $sortering = $_POST['category_sortering'];


    $sql = "UPDATE `kategorier` SET navn = '{$navn}', sortering = '{$sortering}' WHERE id = '{$category_id}'";

    $result = $con->query($sql);

    header('Location: index.php?page=category');
}

$sql = "SELECT * FROM kategorier WHERE id = {$category_id}";
$result = $con->query($sql);
while ($row = $result->fetch_object()) {
    $navn = $row->navn;
    $sortering = $row->sortering;
}
?> 
<div class="col-lg-6">
    <form method="post" role="form" >
        <div class="form-group">
            <label for="category_name">Navn på kategori</label>
            <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Kategoriens Navn" value="<?php echo $navn; ?>" maxlength="32" required>
        </div>
        <div class="form-group">
            <label for="category_sortering">Sortering</label>
            <input type="number" class="form-control" name="category_sortering" id="category_sortering" placeholder="Sortering" value="<?php echo $sortering; ?>" maxlength="128" required>
        </div>
        <input type="submit" class="btn btn-success" name="category_submit" value="Gem" />
        <a href="index.php?page=users" class="btn btn-default" onclick="return confirm('Er du sikker på du vil annullere?')">Annuller</a>
    </form>
    <?php ?>
</div>
