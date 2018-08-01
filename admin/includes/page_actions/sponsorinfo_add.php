<?php
include ('../includes/lib/WideImage.php');
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
}
if ($_SESSION['role'] > 1) {
    die(header('location: index.php'));
}
?>
<h2>Opret Sponsor Pris</h2>
<?php
?>
<div class="col-lg-6">

    <form method="post" role="form" enctype="multipart/form-data">

        <div class="form-group">
            <label for="vis">Visninger</label>
            <input type="number" class="form-control" name="vis" id="vis" placeholder="Visninger" value="" required>
        </div>
        <div class="form-group">
            <label for="pris">Priser</label>
            <input type="number" step="0.01" class="form-control" name="pris" id="pris" placeholder="Priser" value="" required>
        </div>

        <input type="submit" class="btn btn-success" name="sponsor_submit" value="Gem" />
        <a href="index.php?page=sponsorinfo" class="btn btn-default" onclick="return confirm('Er du sikker på du vil annullere?')">Annuller</a>
    </form>
    <?php
    if (isset($_POST['sponsor_submit'])) {

        $vis = $_POST['vis'];
        $pris = $_POST['pris'];


        $sql = "INSERT INTO `sponsorinfo`(visninger, priser) VALUES ('{$vis}', '{$pris}')";
        $result = $con->query($sql);
        //echo $sql;
        header('Location: index.php?page=sponsorinfo');
    }
    ?>
</div>
