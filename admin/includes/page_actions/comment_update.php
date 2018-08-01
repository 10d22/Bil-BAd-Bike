<?php
include ('../includes/lib/WideImage.php');
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
}
?>
<h2>Redigere Redaktør</h2>
<?php
if (isset($_GET['comment_id'])) {
    $comment_id = $_GET['comment_id'];
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
    $navn = $_POST['navn'];
    $email = $_POST['email'];
    $tekst = $_POST['text'];

    $sql = "UPDATE `kommentar` SET navn = '{$navn}', email = '{$email}', tekst = '{$tekst}' WHERE id = '{$comment_id}'";

    $result = $con->query($sql);

    header("Location: index.php?page=news&category_id=$category_id");
}

$sql = "SELECT * FROM kommentar WHERE id = {$comment_id}";
$result = $con->query($sql);
while ($row = $result->fetch_object()) {
    $navn = $row->navn;
    $email = $row->email;
    $tekst = $row->tekst;
}
?> 
<div class="col-lg-6">
    <form method="post" role="form">
        <div class="form-group">
            <label for="navn">Navn</label>
            <input type="text" class="form-control" name="navn" id="navn" placeholder="Navn" value="<?php echo $navn; ?>" maxlength="32" required>
        </div>
        <div class="form-group">

            <label for="user_email">Email</label>
            <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Email" value="<?php echo $email; ?>" maxlength="128">
        </div>
        <div class="form-group">
            <label for="text">Kommentar Tekst</label>

            <textarea class="form-control" name="text" id="text" placeholder="Nyheds Tekst" rows="10" required><?php echo $tekst; ?></textarea>
        </div>
        <input type="submit" class="btn btn-success" name="news_submit" value="Gem" />
        <a href="index.php?page=news&category_id=<?php echo $category_id; ?>" class="btn btn-default" onclick="return confirm('Er du sikker på du vil annullere?')">Annuller</a>
    </form>

    <?php ?>
</div>
