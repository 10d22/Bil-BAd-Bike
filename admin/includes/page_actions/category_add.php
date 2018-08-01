<?php
include ('../includes/lib/WideImage.php');
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
}
?>
<h2>Opret Kategori</h2>
<?php
if ($_SESSION['role'] > 1) {
    die(header('location: index.php'));
}

$navn = '';
$sortering = '';
?>
<div class="col-lg-6">

    <form method="post" role="form">
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
    <?php
    if (isset($_POST['category_submit'])) {
        $navn = $_POST['category_name'];
        $sortering = $_POST['category_sortering'];


        $sql = "INSERT INTO `kategorier`(navn, sortering) VALUES ('{$navn}', '{$sortering}')";
        $result = $con->query($sql);
        header('Location: index.php?page=category');
    }
    ?>
</div>
