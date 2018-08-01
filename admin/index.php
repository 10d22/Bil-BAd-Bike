<?php
session_start();
require_once('../includes/connection.php');
if (!isset($_SESSION['user'])) {
    die('<p class="alert alert-danger">
                 <strong>ADVARSEL</strong> du skal v&aelig;re logget p&aring;, for at se denne side.  
                 <a href="../login.php" class="btn btn-primary">G&aring; til Login</a>
             </p>');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Magasinet Bil, Båd & Bike - Administration</title>
        <!-- http://www.bootstrapcdn.com/ -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
        <script src="../ckeditor/ckeditor.js" type="text/javascript"></script>
        <link href="//netdna.bootstrapcdn.com/bootswatch/3.0.0/slate/bootstrap.min.css" rel="stylesheet">
        <!-- Særlige styles der overskriver Bootstrap -->
        <script src="../ckeditor/ckeditor.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <header>
                <h1 class="well">Magasinet Bil, Båd & Bike - Administration</h1>
            </header>

            <div class="row">
                <nav class="col-lg-3 ">
                    <?php
                    // her indlæses menuen
                    include ('includes/menu.php');
                    ?>
                </nav>

                <section class="col-lg-9">
                    <?php
                    if (isset($_GET['page'])) {
                        include ('includes/pages.php');
                    } else {
                        ?>
                        <h2>Artikel Log</h2>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>

                                    <th>Navn</th>
                                    <th>Tekst</th>
                                    <th>Dato</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>

                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $sql = "SELECT log.*, bruger.navn FROM log INNER JOIN bruger ON fk_bruger_id = bruger.id ORDER by dato DESC";
                                $result = $con->query($sql);
                                while ($row = $result->fetch_object()) {

                                    echo '
			            <tr>
			              
			                <td>' . $row->navn . '</td>
			                <td>' . $row->tekst . '</td>
			                <td>' . $row->dato . '</td>
                                        
			            </tr>';
                                }
                                echo '</tbody></table>';
                            }
                            ?>


                            </section>
                            </div>

                        <footer>
                            <p>

                            </p>
                        </footer>
                        </div>
                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
                        </body>
                        </html>

