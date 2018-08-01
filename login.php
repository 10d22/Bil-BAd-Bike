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
            $page = 'forside';
            include 'includes/topbar.php';
            ?>
            <div class="row">
                <div class="col-md-8">
                    <h2 class="text-uppercase">Log ind</h2>
                    <div class="row forside">
                        <div class="col-md-12">
                            <?php
                            $email = "admin@admin.dk";
                            $password = "password";
                            //echo password_hash("password", PASSWORD_DEFAULT) . "\n";
                            ?>
                            <form class="form-horizontal login" method="post">
                                <div class="form-group ">
                                    <label for="login_email" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="email"  name="login_email" placeholder="Email" value="<?php echo $email ?>"  required autofocus  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="login_password" class="col-lg-2 control-label">Kodeord</label>
                                    <div class="col-lg-10">
                                        <input type="password" name="login_password" placeholder="Kodeord" value="<?php echo $password ?>" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-default" name="login_submit">Log ind</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            if (isset($_POST['login_submit'])) {
                                $errors = array();
                                $username = $_POST['login_email'];
                                $password = $_POST['login_password'];
                                if (empty($username) || empty($password)) {
                                    $errors[] = "Du mangler at udfylde et felt";
                                }
                                $sql = "SELECT * FROM bruger WHERE email = '{$username}'";
                                $result = $con->query($sql);
                                if (mysqli_num_rows($result) == 1) {

                                    $aut_user = $result->fetch_object();
                                    if (password_verify($password, $aut_user->hash) == true) {
                                        $_SESSION['user'] = $aut_user->id;
                                        $_SESSION['name'] = $aut_user->navn;
                                        $_SESSION['role'] = $aut_user->rolle;
                                       // echo $sql;
                                       // print_r($_SESSION);
                                        header('Location: admin/index.php');
                                    } else {
                                        $errors[] = "Det indtastede password er forkert.<br>Prøv igen! $password";
                                        
                                    }
                                } elseif (mysqli_num_rows($result) == 0) {

                                    $errors[] = "Det indtastede brugernavn er forkert.<br>Prøv igen!";
                                }

                                if (sizeof($errors) > 0) {
                                    foreach ($errors as $error) {
                                        echo $error . " <br />";
                                    }
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
