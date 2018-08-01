<?php
include ('../includes/lib/WideImage.php');
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
}
if ($_SESSION['role'] > 1) {
    die(header('location: index.php'));
}


if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
} else {
    die(header('location: index.php?page=users'));
}



$user_id = ($_GET['user_id'] * 1);

$sql = "SELECT * FROM bruger WHERE id = {$user_id}";
$result = $con->query($sql);
while ($row = $result->fetch_object()) {
    $billed = $row->billed;
 
}

unlink("uploadede_billder/" . $billed);

$query = "DELETE FROM bruger WHERE id = $user_id";
// or die er fjernet og istedet udskrives fejl længere nede
if ($result = $con->query($query)) {
    // hvis det lykkes at slette kategorien fra databsen,
    // så indlæses kategori liste siden igen
    die(header('location: index.php?page=users'));
}
?>

</div>
