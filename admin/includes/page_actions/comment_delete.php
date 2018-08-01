<?php
include ('../includes/lib/WideImage.php');
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
}

if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
}
if (isset($_GET['comment_id'])) {
    $comment_id = $_GET['comment_id'];
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


//$news_id = ($_GET['news_id'] * 1);

$query = "DELETE FROM kommentar WHERE id = $comment_id";
// or die er fjernet og istedet udskrives fejl længere nede
if ($result = $con->query($query)) {
    // hvis det lykkes at slette kategorien fra databsen,
    // så indlæses kategori liste siden igen
    die(header("location: index.php?page=news&category_id=$category_id"));
}
?>

</div>
