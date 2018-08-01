<?php
include ('../includes/lib/WideImage.php');
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
}
if ($_SESSION['role'] > 1) {
    die(header('location: index.php'));
}
?>
<h2>Opret Redaktør</h2>
<?php
$navn = '';
$email = '';
$news_content = '';
?>
<div class="col-lg-6">

    <form method="post" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="user_name">Navn</label>
            <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Redaktørens Navn" value="<?php echo $navn; ?>" maxlength="32" required>
        </div>
        <div class="form-group">
            <label for="user_pic">Billed</label>
            <input id="user_pic" type="file" name="uploadet-fil[]" required/>
        </div>
        <div class="form-group">

            <label for="user_email">Email</label>
            <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Email" value="<?php echo $email; ?>" maxlength="128" required>
        </div>
        <div class="form-group">
            <label for="user_password">Kodeord</label>
            <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Kodeord" value=""  required>
        </div>

        <div class="form-group ">

            <label for="user_content">Redaktør Tekst</label>

            <textarea class="form-control" name="user_content" id="user_content" placeholder="Profil Tekst" rows="10" required><?php echo $news_content; ?></textarea>

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
    <?php
    if (isset($_POST['user_submit'])) {
        $navn = $_POST['user_name'];
        $email = $_POST['user_email'];
        $kodeord = $_POST['user_password'];
        $tekst = $_POST['user_content'];
        $rolle = $_POST['role_id'];

        $hash = password_hash("$kodeord", PASSWORD_DEFAULT);

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

        if ($_FILES['uploadet-fil']) {
            $file_ary = reArrayFiles($_FILES['uploadet-fil']);

            foreach ($file_ary as $fil) {
                $nyt_filnavn = time() . "_" . $fil['name'];

                //$ny_sti = "uploadede_billeder/" . $nyt_filnavn;
                $billedmappe = 'uploadede_billder/';

                $wi_billede_fuld = WideImage::load($fil['tmp_name']);

                $wi_billede_thump = $wi_billede_fuld->resize(128, 999, 'inside');
                $wi_billede_thump->saveToFile($billedmappe . '' . $nyt_filnavn);
            }

            $sql = "INSERT INTO `bruger`(navn, profiltekst, billed, email, rolle, hash) VALUES ('{$navn}', '{$tekst}', '{$nyt_filnavn}', '{$email}', '{$rolle}',  '{$hash}')";
            $result = $con->query($sql);
            header('Location: index.php?page=users');
        }
    }
    ?>
</div>
