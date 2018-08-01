<?php
if ($_SESSION['role'] > 1) {
    die(header('location: index.php'));
}

include ('../includes/lib/WideImage.php');
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
}

if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
}else{
    die(header('location: index.php?page=category'));
}



$category_id = ($_GET['category_id'] * 1);

$query = "DELETE FROM kategorier WHERE id = $category_id";
// or die er fjernet og istedet udskrives fejl længere nede
if ($result = $con->query($query)) {
    // hvis det lykkes at slette kategorien fra databsen,
    // så indlæses kategori liste siden igen
    die(header('location: index.php?page=category'));
}
?>

</div>
