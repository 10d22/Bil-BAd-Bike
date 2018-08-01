<?php
include ('../includes/lib/WideImage.php');
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
}

if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
}
if (isset($_GET['news_id'])) {
    $news_id = $_GET['news_id'];
} else {
    die(header('location: index.php?page=news&category_id=$category_id'));
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

$sql = "SELECT * FROM artikler WHERE id = {$news_id}";
$result = $con->query($sql);
while ($row = $result->fetch_object()) {
    $overskrift = $row->overskrift;
}

$logbesked = "artiklen $overskrift blev slettet";

$sql2 = "INSERT INTO `log`(tekst, dato, fk_bruger_id) VALUES ('{$logbesked}', NOW(), '{$userid}')";
$result2 = $con->query($sql2);

//$news_id = ($_GET['news_id'] * 1);

$query = "DELETE FROM artikler WHERE id = $news_id";
// or die er fjernet og istedet udskrives fejl længere nede
if ($result = $con->query($query)) {
    // hvis det lykkes at slette kategorien fra databsen,
    // så indlæses kategori liste siden igen
    die(header("location: index.php?page=news&category_id=$category_id"));
}
?>

</div>
