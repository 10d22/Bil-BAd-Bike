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
}
?>
<h2>Redigere Sponsor Pris</h2>
<?php
$sql = "SELECT * FROM sponsorinfo WHERE id = {$sponsor_id}";
$result = $con->query($sql);
while ($row = $result->fetch_object()) {
    $vis = $row->visninger;
    $pris = $row->priser;
}
if (isset($_POST['sponsor_submit'])) {

    $vis = $_POST['vis'];
    $pris = $_POST['pris'];


    $sql = "UPDATE `sponsorinfo` SET visninger = '{$vis}',`priser`= '{$pris}' WHERE id =  '{$sponsor_id}'";

    //echo $sql;
    $result = $con->query($sql);

    header('Location: index.php?page=sponsorinfo');
}
?>
<div class="col-lg-6">

    <form method="post" role="form" enctype="multipart/form-data">

        <div class="form-group">
            <label for="vis">Visninger</label>
            <input type="number" class="form-control" name="vis" id="vis" placeholder="Visninger" value="<?php echo $vis; ?>" required>
        </div>
        <div class="form-group">
            <label for="pris">Priser</label>
            <input type="number" step="0.01" class="form-control" name="pris" id="pris" placeholder="Priser" value="<?php echo $pris; ?>" required>
        </div>

        <input type="submit" class="btn btn-success" name="sponsor_submit" value="Gem" />
        <a href="index.php?page=sponsorinfo" class="btn btn-default" onclick="return confirm('Er du sikker på du vil annullere?')">Annuller</a>
    </form>
    <?php
    ?>
</div>
