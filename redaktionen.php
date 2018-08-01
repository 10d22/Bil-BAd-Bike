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
        <title>Magasinet Bil, Båd & Bike | Redaktionen</title>
    </head>
    <body>
        <div class="container">
            <a href="index.php"><img class="logo" src="images/logo.png" alt=""/></a>
            <?php
            $page = 'redaktionen';
            include 'includes/topbar.php';
            ?>
            <div class="row">
                <div class="col-md-8">
                    <?php
                    echo "<p class='sitemap'><span>Forside</span> / Redaktionen</p>";
                    echo "<h2 class='text-uppercase'>Redaktionen</h2>";
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            $sql = "SELECT * FROM kategorier ORDER BY sortering ";
                            $result = $con->query($sql);

                            while ($row = $result->fetch_object()) {
                                echo "<h3>$row->navn</h3>";
                                $sql2 = "SELECT bruger.*, kategorie_editor.* FROM bruger INNER JOIN kategorie_editor ON kategorie_editor.fk_bruger_id=bruger.id WHERE kategorie_editor.fk_kategorier_id = $row->id";
                                $result2 = $con->query($sql2);

                                while ($row2 = $result2->fetch_object()) {
                                    echo '<article>';
                                    echo "<img src = 'admin/uploadede_billder/$row2->billed' width = '120px' style = 'float: left; margin-right: 15px;' alt = ''/>";
                                    echo "<h5>$row2->navn</h5>";
                                    echo "<div class = 'articleinfo'><span class = 'glyphicon glyphicon-envelope'></span> $row2->email</div>";
                                    echo "<p>$row2->profiltekst</p>";
                                    echo '</article>';
                                }
                            }
                            ?>



                            <?php
//                            $sql = "SELECT bruger.* FROM bruger INNER JOIN kategorier ON artikler.fk_kategorier_id=kategorier.id INNER JOIN kategorie_editor ON artikler.fk_bruger_id=bruger.id WHERE kategorier.navn LIKE '%$search%' OR artikler.overskrift LIKE '%$search%' OR artikler.tekst LIKE '%$search%' OR bruger.navn LIKE '%$search%' OR bruger.profiltekst LIKE '%$search%' ORDER BY artikler.dato  DESC";
//                            $result = $con->query($sql);
//
//                            while ($row = $result->fetch_object()) {
//                                
//                            }
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
