<h2>Redaktør Administration</h2>
<div class="panel panel-info">
    <div class="panel-body">
        <form class="form" method="post" action="">
            <select name="categoryID">
                <?php
                if ($_SESSION['role'] > 1) {
                    die(header('location: index.php'));
                }

                $sql = "SELECT * FROM kategorier ORDER BY sortering";
                $result = $con->query($sql);
                while ($row = $result->fetch_object()) {
                    echo ' <option value=" ' . $row->id . ' "> ' . $row->navn . ' </option> ';
                }
                ?>
                <input class="btn btn-default " type="submit" name="choose" value="vælg">
            </select></form>
        <?php
        if (isset($_POST['choose'])) {
            $category_id = $_POST['categoryID'];
            ?>
            </form>
            <div class = "row">

                <div class = "col-lg-12">
                    <h2> <?php
                        $sql = "SELECT navn FROM kategorier WHERE id = $category_id";
                        $result = $con->query($sql);
                        while ($row = $result->fetch_object()) {
                            echo "$row->navn";
                        }
                        ?> </h2> 
                </div>
            </div>
            <form class = "form" method = "post" action = "">
                <div class = "row">

                    <div class = "col-lg-5">
                        <h3> Ikke Redaktører </h3>
                        <select class="form-control" name="not_editor[]" multiple="multiple" size="20" >
                            <?php
                            $sql2 = "SELECT id, navn FROM bruger WHERE id NOT IN ( SELECT fk_bruger_id FROM kategorie_editor WHERE fk_kategorier_id = $category_id ) AND rolle = 2 ORDER BY navn";
                            $result = $con->query($sql2);
                            while ($row = $result->fetch_object()) {
                                echo ' <option value=" ' . $row->id . ' "> ' . $row->navn . ' </option> ';
                            }
                            ?> 
                            <input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
                        </select>
                    </div>
                    <div class="col-lg-2" style="padding-top: 200px;">
                        <button class="btn btn-success form-control" type="submit" name="add" style="margin-bottom: 10px;">
                            <span class="glyphicon glyphicon-step-forward"></span>
                        </button>
                        <button class="btn btn-default form-control" type="submit" name="remove">
                            <span class="glyphicon glyphicon-step-backward"></span>
                        </button>
                    </div>
                    <div class="col-lg-5">

                        <h3> Redaktører </h3> 
                        <select class="form-control" name="is_editor[]" multiple="multiple" size="20" > 
                            <?php
                            $query = "SELECT bruger.id, bruger.navn FROM bruger INNER JOIN kategorie_editor ON fk_bruger_id = bruger.id WHERE fk_kategorier_id = $category_id";
                            $result = $con->query($query);
                            while ($row = $result->fetch_object()) {
                                echo ' <option value=" ' . $row->id . ' "> ' . $row->navn . ' </option> ';
                            }
                            ?> 
                            <input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
                        </select>
                        </form>
                        <?php
                    }
                    if (isset($_POST['add'])) {
                        $category_id = $_POST['category_id'];
                        if (isset($_POST['not_editor']) && is_array($_POST['not_editor'])) {
                            foreach ($_POST ['not_editor'] as $user) {
                                $user = ($user * 1 ); // quick int convertion 
                                $query = "INSERT INTO kategorie_editor (fk_bruger_id, fk_kategorier_id) VALUES( $user , $category_id)";
                                $result = $con->query($query);
                            }
                        }
                    } elseif (isset($_POST['remove'])) {
                        $category_id = $_POST['category_id'];
                        if (isset($_POST['is_editor']) && is_array($_POST['is_editor'])) {
                            foreach ($_POST ['is_editor'] as $user) {
                                $user = ($user * 1 ); // quick int convertion 
                                $query = "DELETE FROM kategorie_editor WHERE fk_bruger_id = $user AND fk_kategorier_id = $category_id";
                                $result = $con->query($query);
                            }
                        }
                    }
                    ?>
                </div>
            </div>
    </div>
</div>


