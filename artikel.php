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
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $sql = "SELECT overskrift FROM artikler WHERE id = $id";
        $result = $con->query($sql);
        while ($row = $result->fetch_object()) {
            echo "<title>Magasinet Bil, Båd & Bike | Artikel - $row->overskrift</title>";
        }
        ?>
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
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        $query = "UPDATE artikler SET visninger = visninger + 1 WHERE id = $id ";
                        $result2 = $con->query($query);

                        $sql = "SELECT fk_kategorier_id FROM artikler WHERE `id` = $id";
                        $result = $con->query($sql);

                        while ($row = $result->fetch_object()) {
                            $kategori_id = $row->fk_kategorier_id;
                        }
                        $sql = "SELECT * FROM kategorier WHERE id = $kategori_id";
                        $result = $con->query($sql);
                        while ($row = $result->fetch_object()) {
                            echo "<p class='sitemap'><span>Forside</span> / $row->navn / Vis Artikel</p>";
                        }
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-12">

                            <?php
                            $sql = "SELECT artikler.*, bruger.* FROM artikler INNER JOIN bruger ON artikler.fk_bruger_id=bruger.id  WHERE artikler.id = $id";
                            $result = $con->query($sql);

                            while ($row = $result->fetch_object()) {

                                echo'<article>';
                                echo "<h2 class='text-uppercase'>" . $row->overskrift;


                                echo "</h2>";
                                echo "<div class='articleinfo text-uppercase'><span class='glyphicon glyphicon-time'></span>" . strftime('%d. %B %Y KL. %H:%M', strtotime($row->dato)) . " <span class='glyphicon glyphicon-comment'></span>";
                                $query = "SELECT COUNT(id) AS antal FROM kommentar WHERE fk_artikler_id = $id";
                                $result2 = $con->query($query);

                                $row2 = mysqli_fetch_assoc($result2);
                                $antalkommentar = $row2['antal'];
                                echo "<span class='commentspan'> $antalkommentar Kommentarer</span>";
                                echo " <span class='glyphicon glyphicon-eye-open'></span> $row->visninger visninger</div>";
                                echo "<p>" . $row->tekst;

                                echo '</p>';
                                echo '<div class="forfatter">';
                                echo '<img src="admin/uploadede_billder/' . $row->billed . '" width="80px" style="float: left; margin-right: 15px;" alt=""/>af ' . $row->navn . ' <span>Redaktør</span>';

                                echo '<p>' . $row->profiltekst . '</p>';
                                echo '</div>';
                            }
                            ?>

                            <br>
                            <h2 class="text-uppercase">kommentar</h2>

                            <?php
                            $sql = "SELECT * FROM kommentar WHERE fk_artikler_id = $id";
                            $result = $con->query($sql);

                            while ($row = $result->fetch_object()) {
                                echo '<div class="row"><div class="col-md-12">';
                                echo '<span class="kommentar-ikon glyphicon glyphicon-comment"></span>';
                                echo '<div class="kommentar">';
                                echo "<h5>$row->navn</h5>";
                                echo "<div class='articleinfo text-uppercase'><span class='glyphicon glyphicon-time'></span> " . strftime('%d. %B %Y KL. %H:%M', strtotime($row->dato)) . "</div>";
                                echo "<p>$row->tekst</p>";
                                echo '</div></div></div>';
                            }
                            ?>

                            <h5>Din Kommentar</h5>
                            <form action="" method="post" class="kontaktform">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="navn">Dit navn</label>
                                        <input id="navn" type="text" name="navn" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Din e-mailadresse</label>
                                        <input id="email" type="email" name="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="besked">Din Besked</label>
                                        <textarea id="besked" name="besked"></textarea>

                                        <button type="submit" name="send" class="btn btn-default text-uppercase">udfør</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            if (isset($_POST['send'])) {
                                $errors = array();
                                //check if the "from" input field is filled out
                                if (isset($_POST['navn']) && isset($_POST['email']) && isset($_POST['besked'])) {
                                    $navn = $_POST['navn'];
                                    $email = $_POST['email'];
                                    $besked = $_POST['besked'];

                                    $sql = "INSERT INTO kommentar (id, navn, email, dato, tekst, fk_artikler_id) VALUES ('', '$navn', '$email', NOW(), '$besked', '$id')";
                                    header("Location: artikel.php?id=$id");
                                    //  echo $sql;
                                    $result = $con->query($sql);
                                } elseif (!isset($_POST['title'])) {
                                    $errors[] = "Du har glemt at udfylde overskrift";
                                } elseif (!isset($_POST['text'])) {
                                    $errors[] = "Du har glemt at udfylde tekst";
                                } elseif (!isset($_POST['forfatter'])) {
                                    $errors[] = "Du har glemt at udfylde forfatter";
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
