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
        <title>Magasinet Bil, Båd & Bike | Sponsor</title>
    </head>
    <body>
        <div class="container">
            <a href="index.php"><img class="logo" src="images/logo.png" alt=""/></a>
            <?php
            $page = 'sponsor';
            include 'includes/topbar.php';
            ?>
            <div class="row">
                <div class="col-md-8">
                    <p class='sitemap'><span>Forside</span> / Sponsor</p>
                    <h2 class="text-uppercase">Sponsor</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            $sql = "SELECT * FROM sponsorinfo WHERE id = 1";
                            $result = $con->query($sql);
                            while ($row = $result->fetch_object()) {
                                echo $row->tekst;
                            }
                            ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr><th><span class="glyphicon glyphicon-eye-open"></span> Visninger</th><th>Pris per visning</th></tr>
                                </thead>
                                <?php
                                $sql = "SELECT * FROM sponsorinfo WHERE id > 1 ORDER BY visninger";
                                $result = $con->query($sql);
                                while ($row = $result->fetch_object()) {
                                    echo '<tr>';
                                    echo "<td>$row->visninger</td>";
                                    echo "<td>$row->priser kr.</td></tr>";
                                }
                                ?>

                            </table>

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
