<ul class="nav nav-pills nav-stacked">
    <li><h2>Administration</h2></li>
    <li><a href="../index.php">Forside</a></li>
    <?php
    if ($_SESSION['role'] == 1) {
        echo '<li><a href="index.php">Admin</a></li>
    <li><a href="index.php?page=users">Brugere</a></li>
    <li><a href="index.php?page=category">Kategorier</a></li>
    <li><a href="index.php?page=editors">Redaktører</a></li>
    <li><a href="index.php?page=kontakt">Kontakt Info</a></li>
    <li><a href="index.php?page=sponsor">Sponsor</a></li>
    <li><a href="index.php?page=sponsorinfo">Sponsor Info</a></li>
    <li><a href="index.php?page=nyhedsbrev">Nyhedsbrev</a></li>
   ';
    }
    ?>

    <li><a href="../includes/logout.php">Log ud</a></li>
</ul>
<ul class="nav nav-pills nav-stacked">
    <li><h2>Nyheds Kategori</h2></li>
    <?php
    $brugerId = $_SESSION['user'];
    if ($_SESSION['role'] == 2) {
        $sql = "SELECT kategorier.navn
    , kategorier.id
    FROM kategorier
    INNER JOIN kategorie_editor
    on kategorier.id = kategorie_editor.fk_kategorier_id
    WHERE kategorie_editor.fk_bruger_id = {$brugerId}
    ORDER BY kategorier.navn ASC";


        $result = $con->query($sql);
        while ($row = $result->fetch_object()) {
            echo "<li><a href='index.php?page=news&amp;category_id=$row->id'>$row->navn</a></li>";
        }
    }
    if ($_SESSION['role'] == 1) {
        $sql = "SELECT * FROM kategorier";


        $result = $con->query($sql);
        while ($row = $result->fetch_object()) {
            echo "<li><a href='index.php?page=news&amp;category_id=$row->id'>$row->navn</a></li>";
        }
    }
    ?>
</ul>
