<footer>
    <div class="row">
        <div class="col-md-4">
            <h4>Adresse</h4>
            <ul>
                <li><strong>Magasinet Bil, Båd & Bike</strong></li>
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
        </div>
        <div class="col-md-4">
            <h4>Kontakt</h4>
            <ul>
                <?php
                $sql = "SELECT `telefon`, `fax`, `email` FROM kontakt"; 
                $result = $con->query($sql);
                while ($row = $result->fetch_object()) {
                    echo "<li>Telefon: $row->telefon</li>";
                    echo "<li>Fax: $row->fax</li>";
                    echo "<li>Email: $row->email</li>";
                }
                ?>
            </ul>
        </div>
        <div class="col-md-4">
            <h4>Nyhedsbrev</h4>
            <form action="" method="POST" >
                <input type="text" placeholder="E-mailadresse" name="email">
                <button type="submit" name="insert" class="btn btn-default text-uppercase">tilmeld</button>
                <button type="submit" name="delete" class="btn btn-default text-uppercase">frameld</button>
            </form>
            <?php
            if (isset($_POST['insert'])) {
                $email = $_POST['email'];
                $sql = "SELECT id FROM nyhedsbrev WHERE email = '{$email}'";
                $result = $con->query($sql);
                if (mysqli_num_rows($result) == 0) {
                    $sql = "INSERT INTO nyhedsbrev (id, email, dato) VALUES ('', '$email', NOW())";
                    $result = $con->query($sql);
                } else {
                    echo 'Email er allerede tilkoblet vores nyhedsbrev';
                }
            } elseif (isset($_POST['delete'])) {
                $email = $_POST['email'];
                $sql = "SELECT id FROM nyhedsbrev WHERE email = '{$email}'";
                $result = $con->query($sql);
                if (mysqli_num_rows($result) == 1) {
                    $sql = "DELETE FROM nyhedsbrev WHERE email = '{$email}'";
                    $result = $con->query($sql);
                } else {
                    echo '<span>Email er ikke tilkoblet vores nyhedsbrev</span>';
                }
            }
            ?>
        </div>
    </div>
</footer>