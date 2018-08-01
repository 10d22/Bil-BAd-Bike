<?php
include ('../includes/lib/WideImage.php');
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
}
?>
<h2>Redigere Redaktør</h2>
<?php
if (isset($_GET['news_id'])) {
    $news_id = $_GET['news_id'];
}
if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
}

$userid = $_SESSION['user'];
$editorsArray = array();
$query = "SELECT * FROM `kategorie_editor` WHERE fk_kategorier_id = $category_id";
$result = $con->query($query);
while ($row = $result->fetch_object()) {
    $editorsArray[] = $row->fk_bruger_id;
}

if (!in_array($userid, $editorsArray)) {
    if ($_SESSION['role'] > 1) {
        die(header('location: index.php'));
    }
}

if (isset($_POST['news_submit'])) {
    $overskrift = $_POST['overskrift'];
    $tekst = $_POST['text'];

    $logbesked = "artiklen $overskrift blev updateret";

    $sql2 = "INSERT INTO `log`(tekst, dato, fk_bruger_id) VALUES ('{$logbesked}', NOW(), '{$userid}')";
    $result2 = $con->query($sql2);

    $sql = "UPDATE `artikler` SET overskrift = '{$overskrift}', tekst = '{$tekst}' WHERE id = '{$news_id}'";

    $result = $con->query($sql);

    header("Location: index.php?page=news&category_id=$category_id");
}

$sql = "SELECT * FROM artikler WHERE id = {$news_id}";
$result = $con->query($sql);
while ($row = $result->fetch_object()) {
    $overskrift = $row->overskrift;
    $tekst = $row->tekst;
}
?> 
<div class="col-lg-12">
    <form method="post" role="form">
        <div class="form-group">
            <label for="overskrift">Overskrift</label>
            <input type="text" class="form-control" name="overskrift" id="overskrift" placeholder="Overskrift" value="<?php echo $overskrift; ?>" required>
        </div>
        <div class="form-group">
            <label for="text">Nyheds Tekst</label>

            <textarea class="form-control" name="text" id="text" placeholder="Nyheds Tekst" rows="10" required><?php echo $tekst; ?></textarea>
            <script>
                CKEDITOR.replace('text');
            </script>
        </div>
        <input type="submit" class="btn btn-success" name="news_submit" value="Gem" />
        <a href="index.php?page=news&category_id=<?php echo $category_id; ?>" class="btn btn-default" onclick="return confirm('Er du sikker på du vil annullere?')">Annuller</a>
    </form>

    <?php ?>
</div>
