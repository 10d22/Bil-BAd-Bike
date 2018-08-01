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
        <title>Magasinet Bil, Båd & Bike | Forside</title>
    </head>
    <body>
        <div class="container">
            <a href="index.php"><img class="logo" src="images/logo.png" alt=""/></a>
            <?php
            $page = 'kontakt';
            include 'includes/topbar.php';
            ?>
            <div class="row">
                <div class="col-md-8">
                    <p class='sitemap'><span>Forside</span> / Kontakt</p>
                    <h2 class="text-uppercase">Kontakt Magasinet</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <article class="kontakt">
                                <h3><span class="glyphicon glyphicon-map-marker"></span> Adresse</h3>
                                <ul>
                                    <?php
                                    $sql = "SELECT `adresse`, `by`, `postnr`, `land` FROM kontakt";
                                    $result = $con->query($sql);
                                    while ($row = $result->fetch_object()) {
                                        echo "<li>$row->adresse</li>";
                                        echo "<li>$row->postnr $row->by</li>";
                                        echo "<li>$row->land</li>";
                                    }
                                    ?>
                                </ul>
                            </article>

                        </div>
                        <div class="col-md-6">
                            <article class="kontakt">
                                <h3>Kontaktoplysninger</h3>
                                <ul>
                                    <?php
                                    $sql = "SELECT `telefon`, `fax`, `email` FROM kontakt";
                                    $result = $con->query($sql);
                                    while ($row = $result->fetch_object()) {
                                        echo "<li><span class='glyphicon glyphicon-earphone'></span> Telefon: $row->telefon</li>";
                                        echo "<li><span class='glyphicon glyphicon-copy'></span> Fax: $row->fax</li>";
                                        echo "<li> <span class='glyphicon glyphicon-envelope'></span> Email: $row->email</li>";
                                    }
                                    ?>

                                </ul>
                            </article>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <h3>Kontakt Formular</h3>

                            <?php
                            $name = ""; // Sender navn
                            $email = ""; // Sender's email 
                            $message = ""; // Sender's besked
                            $subject = ""; // Sender's emne

                            Function test_input($data) {
                                $data = trim($data);
                                $data = stripslashes($data);
                                $data = htmlspecialchars($data);
                                return $data;
                            }

                            $errors = array();
                            if (isset($_POST['send'])) { // Checking null values in message.
                                if (empty($_POST["navn"])) {
                                    $errors[] = "Navn er påkrævet";
                                } else {
                                    $name = test_input($_POST["navn"]); // check name only contains letters and whitespace
                                    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                                        $errors[] = "I navn er kun bogstaver og mellemrum er muligt";
                                    }
                                } 
                                if (empty($_POST["email"])) {
                                    $errors[] = "En email er påkrævet";
                                } else {
                                    $email = test_input($_POST["email"]);
                                }
                                if (empty($_POST["emne"])) {
                                    $errors[] = "Et emne er påkrævet";
                                } else {
                                    $subject = test_input($_POST["emne"]);
                                }  
                                if (empty($_POST["besked"])) {
                                    $errors[] = "besked er påkrævet";
                                } else {
                                    $message = test_input($_POST["besked"]);
                                } 
                                if (!($name == '') && !($email == '') && !($subject == '') && !($message == '')) { // Checking valid email.
                                    $msg = "Hej! $name Tak fordi du kontakted os."
                                            . "Dette er en konfirmations mail.";
                                    $msg1 = " $name Kontakted os!. Her er noget info om $name.Navn: $name, E-mail: $email, Emne; $subject, Besked: $message ";

                                    if (mail($email, $subject, $msg) && mail("redaktionen@bbbmag.dk", $subject, $msg1)) {
                                        $errors[] = "Besked sent!";
                                    }
                                }
                            }
                            ?>


                            <form action="" method="post" class="kontaktform">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="navn">Dit navn</label>
                                        <input id="navn" type="text" name="navn">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Din e-mailadresse</label>
                                        <input id="email" type="email" name="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="emne">Emne</label>
                                        <input id="emne" type="text" name="emne">
                                        <label for="besked">Din Besked</label>
                                        <textarea id="besked" name="besked"></textarea>

                                        <?php
                                        if (sizeof($errors) > 0) {
                                            foreach ($errors as $error) {
                                                echo '<span class="error-message">' . $error . "</span><br />";
                                            }
                                        }
                                        ?>

                                        <button type="submit" name="send" class="btn btn-default text-uppercase">Send Besked</button>
                                    </div>
                                </div>
                            </form>

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
