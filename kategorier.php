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
        <div class="container">
            <a href="index.php"><img class="logo" src="images/logo.png" alt=""/></a>
            <?php
            $page = 'kategori';
            include 'includes/topbar.php';
            ?>
            <div class="row">
                <div class="col-md-8">
                    <?php
                    if (isset($_GET['kategori_id'])) {
                        $id = $_GET['kategori_id'];
                    }
                    $sql = "SELECT * FROM kategorier WHERE id = {$id}";
                    $result = $con->query($sql);
                    while ($row = $result->fetch_object()) {
                        echo "<p class='sitemap'><span>Forside</span> / $row->navn</p>";
                        echo "<h2 class='text-uppercase'>$row->navn</h2>";
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                          


                            $sql = "SELECT * FROM artikler WHERE `fk_kategorier_id` = $id ORDER BY dato DESC LIMIT 3"; //SELECT * FROM ( SELECT *, @rowNumber := @rowNumber+ 1 rn FROM artikler JOIN (SELECT @rowNumber:= 0) r ) t WHERE rn % 2 = 0 LIMIT 3
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
                                echo "<span> $antalkommentar Kommentarer</span><span class='glyphicon glyphicon-eye-open'></span> $row->visninger visninger</div>";
                                echo "<p>" . substr(strip_tags($row->tekst), 0, 500);
                                if (strlen($row->tekst) > 500) {
                                    echo " ...";
                                }
                                echo '</p>';
                                echo "<a href='artikel.php?id=$row->id' class='btn btn-default text-uppercase'>Læs mere</a></article>";
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
