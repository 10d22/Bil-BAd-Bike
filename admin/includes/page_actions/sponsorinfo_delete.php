<?php
include ('../includes/lib/WideImage.php');
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
}
if ($_SESSION['role'] > 1) {
    die(header('location: index.php'));
}


if (isset($_GET['sponsor_id'])) {
    $sponsor_id = $_GET['sponsor_id'];
} else {
    die(header('location: index.php?page=sponsorinfo'));
}



$sponsor_id = ($_GET['sponsor_id'] * 1);

$query = "DELETE FROM sponsorinfo WHERE id = $sponsor_id";
// or die er fjernet og istedet udskrives fejl længere nede
if ($result = $con->query($query)) {
    // hvis det lykkes at slette kategorien fra databsen,
    // så indlæses kategori liste siden igen
    die(header('location: index.php?page=sponsorinfo'));
}
?>

</div>
