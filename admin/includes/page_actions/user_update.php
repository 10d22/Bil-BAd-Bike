<?php
include ('../includes/lib/WideImage.php');
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
}
?>
<h2>Redigere Redaktør</h2>
<?php
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
}
if ($_SESSION['role'] > 1) {
    die(header('location: index.php'));
}


$sql = "SELECT * FROM bruger WHERE id = {$user_id}";
$result = $con->query($sql);
while ($row = $result->fetch_object()) {
    $navn = $row->navn;
    $email = $row->email;
    $tekst = $row->profiltekst;
    $rolle = $row->rolle;
    $billed = $row->billed;
}


if (isset($_POST['user_submit'])) {
    $navn = $_POST['user_name'];
    $email = $_POST['user_email'];
    if (!empty($_POST['user_password'])) {
        $kodeord = $_POST['user_password'];
        $hash = password_hash("$kodeord", PASSWORD_DEFAULT);
    }
    $tekst = $_POST['user_content'];
    $rolle = $_POST['role_id'];

    //taget fra php.net
    function reArrayFiles(&$file_post) {

        $file_ary = array();
        $file_count = count($file_post['name']);
        $file_keys = array_keys($file_post);

        for ($i = 0; $i < $file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post[$key][$i];
            }
        }

        return $file_ary;
    }

    if (isset($_FILES['uploadet-fil']) && count($_FILES['uploadet-fil']['error']) == 1 && $_FILES['uploadet-fil']['error'][0] > 0) {
        
    } elseif (isset($_FILES['uploadet-fil'])) {
        $file_ary = reArrayFiles($_FILES['uploadet-fil']);

        foreach ($file_ary as $fil) {
            $nyt_filnavn = time() . "_" . $fil['name'];

            //$ny_sti = "uploadede_billeder/" . $nyt_filnavn;
            $billedmappe = 'uploadede_billder/';

            $wi_billede_fuld = WideImage::load($fil['tmp_name']);

            $wi_billede_thump = $wi_billede_fuld->resize(128, 999, 'inside');
            $wi_billede_thump->saveToFile($billedmappe . '' . $nyt_filnavn);

            unlink("uploadede_billder/" . $billed);
        }
    }

    if (isset($nyt_filnavn) && !empty($_POST['user_password'])) {
        $sql = "UPDATE `bruger` SET navn = '{$navn}', profiltekst = '{$tekst}', billed = '{$nyt_filnavn}', email = '{$email}', rolle = '{$rolle}', hash = '{$hash}' WHERE id = '{$user_id}'";
    }
    if (isset($nyt_filnavn)) {
        $sql = "UPDATE `bruger` SET navn = '{$navn}', profiltekst = '{$tekst}', billed = '{$nyt_filnavn}', email = '{$email}', rolle = '{$rolle}' WHERE id = '{$user_id}'";
    }
    if (!empty($_POST['user_password'])) {
        $sql = "UPDATE `bruger` SET navn = '{$navn}', profiltekst = '{$tekst}', email = '{$email}', rolle = '{$rolle}', hash = '{$hash}' WHERE id = '{$user_id}'";
    }
    if (!isset($nyt_filnavn) || !isset($_POST['user_password'])) {
        $sql = "UPDATE `bruger` SET navn = '{$navn}', profiltekst = '{$tekst}', email = '{$email}', rolle = '{$rolle}' WHERE id = '{$user_id}'";
    }
    $result = $con->query($sql);

    //echo "<pre>$sql</pre>";
    header('Location: index.php?page=users');
}
?> 
<div class="col-lg-6">
    <form method="post" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="user_name">Navn</label>
            <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Redaktørens Navn" value="<?php echo $navn; ?>" maxlength="32" required>
        </div>
        <div class="form-group">
            <label for="user_pic">Billed</label>
            <input id="user_pic" type="file" name="uploadet-fil[]"/>
        </div>
        <div class="form-group">

            <label for="user_email">Email</label>
            <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Email" value="<?php echo $email; ?>" maxlength="128" required>
        </div>
        <div class="form-group">
            <label for="user_password">Kodeord</label>
            <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Nyt Kodeord" value="">
        </div>

        <div class="form-group ">

            <label for="user_content">Nyheds Tekst</label>

            <textarea class="form-control" name="user_content" id="user_content" placeholder="Profil Tekst" rows="10" required><?php echo $tekst; ?></textarea>

        </div>
        <div class="form-group">
            <label for="role_id">Rolle</label>
            <select class="form-control" name="role_id" id="role_id">
                <option value="2">Redaktør</option>
                <option value="1">Admin</option>


            </select>
        </div>
        <input type="submit" class="btn btn-success" name="user_submit" value="Gem" />
        <a href="index.php?page=users" class="btn btn-default" onclick="return confirm('Er du sikker på du vil annullere?')">Annuller</a>
    </form>
    <?php ?>
</div>
