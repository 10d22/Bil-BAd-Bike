<?php
include ('../includes/lib/WideImage.php');
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
}
?>
<h2>Redigere Sponsor</h2>
<?php
if (isset($_GET['sponsor_id'])) {
    $sponsor_id = $_GET['sponsor_id'];
}
if ($_SESSION['role'] > 1) {
    die(header('location: index.php'));
}

$sql = "SELECT * FROM sponsor WHERE id = {$sponsor_id}";
$result = $con->query($sql);
while ($row = $result->fetch_object()) {
    $billed = $row->billed;
    $category = $row->fk_kategorier_id;
}
if (isset($_POST['sponsor_submit'])) {

    $category = $_POST['category'];

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
            $billedmappe = 'uploadede_billder/ads/';

            $wi_billede_fuld = WideImage::load($fil['tmp_name']);

            //$wi_billede_thump = $wi_billede_fuld->resize(128, 999, 'inside');
            $wi_billede_fuld->saveToFile($billedmappe . '' . $nyt_filnavn);

            unlink("uploadede_billder/ads/" . $billed);
        }
    }

    if (isset($nyt_filnavn)) {
        $sql = "UPDATE `sponsor` SET billed = '{$nyt_filnavn}',`fk_kategorier_id`= '{$category}' WHERE id =  '{$sponsor_id}'";
    }
    if (!isset($nyt_filnavn)) {
        $sql = "UPDATE `sponsor` SET `fk_kategorier_id`= '{$category}' WHERE id =  '{$sponsor_id}'";
    }
    echo $sql;
    $result = $con->query($sql);

    header('Location: index.php?page=sponsor');
}
?> 
<div class="col-lg-6">
    <form method="post" role="form" enctype="multipart/form-data">

        <div class="form-group">
            <label for="user_pic">Billed</label>
            <input id="user_pic" type="file" name="uploadet-fil[]"/>
        </div>

        <div class="form-group">
            <label for="category">Kategori</label>
            <select class="form-control" name="category" id="category">
                <?php
                $sql = "SELECT * FROM kategorier ORDER BY sortering";
                $result = $con->query($sql);
                while ($row = $result->fetch_object()) {
                    echo ' <option value=" ' . $row->id . ' " ';
                    if ($category == $row->id) {
                        echo 'selected';
                    }
                    echo '> ' . $row->navn . ' </option> ';
                }
                ?>


            </select>
        </div>
        <input type="submit" class="btn btn-success" name="sponsor_submit" value="Gem" />
        <a href="index.php?page=sponsor" class="btn btn-default" onclick="return confirm('Er du sikker på du vil annullere?')">Annuller</a>
    </form>
    <?php ?>
</div>
