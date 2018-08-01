<?php
include ('../includes/lib/WideImage.php');
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
}
?>
<h2>Kontakt Info</h2>
<?php
if ($_SESSION['role'] > 1) {
    die(header('location: index.php'));
}


if (isset($_POST['gem-info'])) {
    $adresse = $_POST['adresse'];
    $by = $_POST['by'];
    $postnr = $_POST['postnr'];
    $land = $_POST['land'];
    $telefon = $_POST['telefon'];
    $fax = $_POST['fax'];
    $email = $_POST['email'];
    

    $sql = "UPDATE `kontakt` SET `adresse`= '{$adresse}',`by`= '{$by}',`postnr`= '{$postnr}',`land`= '{$land}',`telefon`= '{$telefon}',`fax`= '{$fax}',`email`= '{$email}' WHERE 1";

    $result = $con->query($sql);
  
    header("Location: index.php");
}

$sql = "SELECT * FROM kontakt";
$result = $con->query($sql);
while ($row = $result->fetch_object()) {
    $adresse = $row->adresse;
    $by = $row->by;
    $postnr = $row->postnr;
    $land = $row->land;
    $telefon = $row->telefon;
    $fax = $row->fax;
    $email = $row->email;
}
?> 
<div class="col-lg-6">
    <form method="post" role="form">
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse" value="<?php echo $adresse; ?>" required>
        </div>
        <div class="form-group">
            <label for="by">By</label>
            <input type="text" class="form-control" name="by" id="adresse" placeholder="By" value="<?php echo $by; ?>" required>
        </div>
        <div class="form-group">
            <label for="postnr">Postnr</label>
            <input type="text" class="form-control" name="postnr" id="postnr" placeholder="Postnr" value="<?php echo $postnr; ?>" maxlength="4" required>
        </div>
        <div class="form-group">
            <label for="land">Land</label>
            <input type="text" class="form-control" name="land" id="land" placeholder="Land" value="<?php echo $land; ?>" required>
        </div>
        <div class="form-group">
            <label for="telefon">Telefon</label>
            <input type="text" class="form-control" name="telefon" id="telefon" placeholder="Telefon" value="<?php echo $telefon; ?>" required>
        </div>
        <div class="form-group">
            <label for="fax">Fax</label>
            <input type="text" class="form-control" name="fax" id="fax" placeholder="Fax" value="<?php echo $fax; ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" required>
        </div>

        <input type="submit" class="btn btn-success" name="gem-info" value="Gem" />
        <a href="index.php" class="btn btn-default" onclick="return confirm('Er du sikker på du vil annullere?')">Annuller</a>
    </form>

    <?php ?>
</div>
