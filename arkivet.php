<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php session_start(); ?>
<?php require_once('includes/connection.php'); ?>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>

        <script src="../ckeditor/ckeditor.js" type="text/javascript"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <title>Magasinet Bil, Båd & Bike | Kategori</title>
    </head>
    <body>

        //
        <div class="container">
            <a href="index.php"><img class="logo" src="images/logo.png" alt=""/></a>
            <?php
            //SELECT * FROM `artikler` INNER JOIN kategorier ON artikler.fk_kategorier_id=kategorier.id INNER JOIN bruger ON artikler.fk_bruger_id=bruger.id WHERE kategorier.navn LIKE '%bil%' OR artikler.overskrift LIKE '%bil%' OR artikler.tekst LIKE '%bil%' OR bruger.navn LIKE '%bil%' OR bruger.profiltekst LIKE '%bil%' 
            $page = 'arkivet';
            include 'includes/topbar.php';
            ?>
            <div class="row">
                <div class="col-md-8">
                    <?php
                    echo "<p class='sitemap'><span>Forside</span> / Arkivet</p>";
                    echo "<h2 class='text-uppercase'>Arkivet</h2>";
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            $news_per_page = 3;
                            $current_page = 1;
                            if (isset($_GET['pagenr']) && is_int($_GET['pagenr'] * 1)) {
                                $current_page = ($_GET['pagenr'] * 1);
                            }
                            ?>
                            <?php
                            if (isset($_POST['searchsubmit'])) {
                                $search = $_POST['search'];

                                $query = "SELECT COUNT(artikler.id) AS antal FROM artikler INNER JOIN kategorier ON artikler.fk_kategorier_id=kategorier.id INNER JOIN bruger ON artikler.fk_bruger_id=bruger.id WHERE kategorier.navn LIKE '%$search%' OR artikler.overskrift LIKE '%$search%' OR artikler.tekst LIKE '%$search%' OR bruger.navn LIKE '%$search%' OR bruger.profiltekst LIKE '%$search%'";
                                $result = $con->query($query);

                                $row = mysqli_fetch_assoc($result);
                                $news = $row['antal'];

                                echo "<p class='searchmsg'>Din søgning på <span>$search</span> returnerede <span>$news</span> artikler";


                                $sql = "SELECT artikler.* FROM artikler INNER JOIN kategorier ON artikler.fk_kategorier_id=kategorier.id INNER JOIN bruger ON artikler.fk_bruger_id=bruger.id WHERE kategorier.navn LIKE '%$search%' OR artikler.overskrift LIKE '%$search%' OR artikler.tekst LIKE '%$search%' OR bruger.navn LIKE '%$search%' OR bruger.profiltekst LIKE '%$search%' ORDER BY artikler.dato  DESC";
                                $result = $con->query($sql);

                                while ($row = $result->fetch_object()) {

                                    echo'<article>';
                                    echo "<h3>" . $row->overskrift;

                                    echo "</h3>";
                                    echo "<div class='articleinfo text-uppercase'><span class='glyphicon glyphicon-time'></span>" . strftime('%d. %B %Y KL. %H:%M', strtotime($row->dato)) . " <span class='glyphicon glyphicon-comment'></span>";
                                    $query = "SELECT COUNT(id) AS antal FROM kommentar WHERE fk_artikler_id = $row->id";
                                    $result3 = $con->query($query);

                                    $row3 = mysqli_fetch_assoc($result3);
                                    $antalkommentar = $row3['antal'];
                                    echo "<span> $antalkommentar Kommentarer</span>";
                                    echo " <span class='glyphicon glyphicon-eye-open'></span> $row->visninger visninger</div>";
                                    echo "<p>" . substr(strip_tags($row->tekst), 0, 500);
                                    if (strlen($row->tekst) > 500) {
                                        echo " ...";
                                    }
                                    echo '</p>';
                                    echo "<div class='tags text-uppercase'><span class='glyphicon glyphicon-tag'></span> ";
                                    $sql2 = "SELECT navn FROM kategorier WHERE id = $row->fk_kategorier_id";
                                    $result2 = $con->query($sql2);
                                    while ($row2 = $result2->fetch_object()) {
                                        echo $row2->navn;
                                    }

                                    echo "</div>";
                                    echo "<a href='artikel.php?id=$row->id' class='btn btn-default text-uppercase'>Læs mere</a></article>";
                                }
                            } elseif (!isset($_POST['searchsubmit'])) {
                                $query = "SELECT COUNT(id) AS antal FROM artikler";
                                $result = $con->query($query);

                                $row = mysqli_fetch_assoc($result);
                                $news_in_category = $row['antal'];
                                $total_pages = ceil($news_in_category / $news_per_page);

                                $offset = ($current_page - 1) * $news_per_page;

                                $sql = "SELECT * FROM artikler ORDER BY dato DESC LIMIT $news_per_page OFFSET $offset";
                                $result = $con->query($sql);

                                while ($row = $result->fetch_object()) {

                                    echo'<article>';
                                    echo "<h3>" . $row->overskrift;

                                    echo "</h3>";
                                    echo "<div class='articleinfo text-uppercase'><span class='glyphicon glyphicon-time'></span>" . strftime('%d. %B %Y KL. %H:%M', strtotime($row->dato)) . " <span class='glyphicon glyphicon-comment'></span>";
                                    $query = "SELECT COUNT(id) AS antal FROM kommentar WHERE fk_artikler_id = $row->id";
                                    $result2 = $con->query($query);

                                    $row2 = mysqli_fetch_assoc($result2);
                                    $antalkommentar = $row2['antal'];
                                    echo "<span> $antalkommentar Kommentarer</span>";
                                    echo " <span class='glyphicon glyphicon-eye-open'></span> $row->visninger visninger</div>";
                                    echo "<p>" . substr(strip_tags($row->tekst), 0, 500);
                                    if (strlen($row->tekst) > 500) {
                                        echo " ...";
                                    }
                                    echo '</p>';
                                    echo "<div class='tags text-uppercase'><span class='glyphicon glyphicon-tag'></span> ";
                                    $sql2 = "SELECT navn FROM kategorier WHERE id = $row->fk_kategorier_id";
                                    $result2 = $con->query($sql2);
                                    while ($row2 = $result2->fetch_object()) {
                                        echo $row2->navn;
                                    }

                                    echo "</div>";
                                    echo "<a href='artikel.php?id=$row->id' class='btn btn-default text-uppercase'>Læs mere</a></article>";
                                }
                                if ($news_in_category != 0 && $news_in_category > $news_per_page) {
                                    echo '<ul class="pagination">';
                                    if ($current_page != 1) {
                                        echo "<li><a href='?pagenr=" . ($current_page - 1) . "'><span class='glyphicon glyphicon-menu-left'></span></a></li>";
                                    }
                                    for ($i = 1; $i <= $total_pages; $i ++) {
                                        $active = ($current_page == $i ? 'class="active"' : '');
                                        $href = "?pagenr=$i";
                                        echo " <li $active><a href='$href'>$i</a></li>";
                                    }
                                    if ($current_page != $total_pages) {
                                        echo "<li><a href='?pagenr=" . ($current_page + 1) . "'><span class='glyphicon glyphicon-menu-right'></span></a></li>";
                                    }
                                    echo '</ul>';
                                }
                            }
                            ?>

                        </div>

                    </div>
                </div>
                <div class="col-md-4">

<?php include 'includes/aside.php'; ?>
                </div>
            </div>
<?php include 'includes/footer.php'; ?>
        </div>

    </body>
</html>
