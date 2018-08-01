<nav class="navbar navbar-default navbar-static-top">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div kategori_id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li <?php
            if ($page == 'forside') {
                echo "class='active'";
            }
            ?>><a class="text-uppercase" href="index.php"><span class="glyphicon glyphicon-home"></span> Forside</a></li>
                <?php
                $sql = "SELECT * FROM kategorier ORDER BY SORTERING";
                $result = $con->query($sql);
                while ($row = $result->fetch_object()) {
                    echo '<li ';
                    if ($page == 'kategori' && isset($_GET['kategori_id']) && $_GET['kategori_id'] == $row->id) {
                        echo "class='active'";
                    }
                    echo "><a class='text-uppercase' href='kategorier.php?kategori_id=$row->id'>$row->navn</a></li>";
                }
                ?>
            
            <li <?php
            if ($page == 'arkivet') {
                echo "class='active'";
            }
            ?>><a class="text-uppercase" href="arkivet.php">arkivet</a></li>
            <li <?php
            if ($page == 'kontakt') {
                echo "class='active'";
            }
            ?>><a class="text-uppercase" href="kontakt.php">kontakt</a></li>
            <li <?php
            if ($page == 'redaktionen') {
                echo "class='active'";
            }
            ?>><a class="text-uppercase" href="redaktionen.php">redaktionen</a></li>

        </ul>

    </div><!--/.nav-collapse -->

</nav>