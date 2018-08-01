<aside>
    <form method="post" action="arkivet.php">
        <input type="text" placeholder="Søg i arkivet..." name="search">
        <button type="submit" name="searchsubmit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </form>
    <h4 class="text-uppercase">mest læste</h3>
        <ul>
            <?php
            $sql = "SELECT * FROM artikler ORDER BY visninger DESC LIMIT 6"; //SELECT * FROM ( SELECT *, @rowNumber := @rowNumber+ 1 rn FROM artikler JOIN (SELECT @rowNumber:= 0) r ) t WHERE rn % 2 = 0 LIMIT 3
            $result = $con->query($sql);
            while ($row = $result->fetch_object()) {

                echo "<li><a href='artikel.php?id=$row->id'>$row->overskrift</a></li>";
            }
            ?>

        </ul>
        <h4 class="text-uppercase">sponsor</h3>
            <ul class="sponsors">
                <?php
                if (isset($_GET['kategori_id'])) {
                    $sql = "SELECT * FROM sponsor WHERE `fk_kategorier_id` = $id ORDER BY RAND() DESC LIMIT 5"; //SELECT * FROM ( SELECT *, @rowNumber := @rowNumber+ 1 rn FROM artikler JOIN (SELECT @rowNumber:= 0) r ) t WHERE rn % 2 = 0 LIMIT 3
                    $result = $con->query($sql);
                    while ($row = $result->fetch_object()) {
                        $query = "UPDATE sponsor SET visninger = visninger + 1 WHERE id = $row->id ";
                        $result2 = $con->query($query);
                        echo "<li><img src='admin/uploadede_billder/ads/$row->billed' alt=''/></li>";
                    }
                } else {
                    $sql = "SELECT * FROM sponsor ORDER BY RAND() DESC LIMIT 5"; //SELECT * FROM ( SELECT *, @rowNumber := @rowNumber+ 1 rn FROM artikler JOIN (SELECT @rowNumber:= 0) r ) t WHERE rn % 2 = 0 LIMIT 3
                    $result = $con->query($sql);
                    while ($row = $result->fetch_object()) {
                        $query = "UPDATE sponsor SET visninger = visninger + 1 WHERE id = $row->id ";
                        $result2 = $con->query($query);
                        echo "<li><img src='admin/uploadede_billder/ads/$row->billed' alt=''/></li>";
                    }
                }
                ?>

                <li><a href="sponsor.php">Din reklame her?</a></li>
            </ul>

            </aside>