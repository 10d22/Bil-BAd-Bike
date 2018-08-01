<?php
if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
}
?>
<h2>Artikle Administration</h2>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th colspan="2" ><a href="index.php?page=news_add&amp;category_id=<?php echo $category_id; ?>" class="btn btn-success btn-xs" title="Opret"><i class="icon-plus"></i> Opret</a></th>
            <th>Id</th>
            <th>Overskrift</th>
            <th>Dato</th>
        </tr>
    </thead>
    <tfoot>
        <tr>

        </tr>
    </tfoot>
    <tbody>
        <?php
        $userid = $_SESSION['user'];
        $editorsArray = array();
        $query = "SELECT * FROM `kategorie_editor` WHERE fk_kategorier_id = $category_id";
        $result = $con->query($query);
        while ($row = $result->fetch_object()) {
            $editorsArray[] = $row->fk_bruger_id;
        }

        if (!in_array($userid, $editorsArray)) {
            if ($_SESSION['role'] > 1) {
                die(header('location: index.php'));
            }
        }


        $newsIdInCategory = array();
        $sql = "SELECT * FROM artikler WHERE `fk_kategorier_id` = $category_id ORDER BY dato";
        $result = $con->query($sql);
        while ($row = $result->fetch_object()) {
            $newsIdInCategory[] = $row->id;
            echo '
			            <tr>
			                <td style="width:30px;">
			                	<a 	href="index.php?page=news_update&amp;news_id=' . $row->id . '&amp;category_id=' . $category_id . '" 
			            			class="btn btn-primary btn-xs" 
			            			title="Rediger">
			            				<i class="icon-pencil"></i>
			    				</a>
							</td>
			                <td style="width:30px;">
			                	<a 	href="index.php?page=news_delete&amp;news_id=' . $row->id . '&amp;category_id=' . $category_id . '"
			                		class="btn btn-danger btn-xs" 
			                		title="Slet" 
			                		onclick="return confirm(\'Er du sikker på du vil slette?\')">
			                			<i class="icon-trash"></i>
			        			</a>
			    			</td>
			                <td style="width:50px;">' . $row->id . '</td>
			                <td>' . $row->overskrift . '</td>
			                <td>' . $row->dato . '</td>
                                        
			            </tr>';
        }
        ?>
    </tbody>
</table>
<h2>Kommentar Administration</h2>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th colspan="2" ></th>
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
        $sql = "SELECT * FROM kommentar ORDER BY dato";
        $result = $con->query($sql);
        while ($row = $result->fetch_object()) {
            if (in_array($row->fk_artikler_id, $newsIdInCategory)) {
                echo '
			            <tr>
			                <td style="width:30px;">
			                	<a 	href="index.php?page=comment_update&amp;comment_id=' . $row->id . '&amp;category_id=' . $category_id . '"
			            			class="btn btn-primary btn-xs" 
			            			title="Rediger">
			            				<i class="icon-pencil"></i>
			    				</a>
							</td>
			                <td style="width:30px;">
			                	<a 	href="index.php?page=comment_delete&amp;comment_id=' . $row->id . '&amp;category_id=' . $category_id . '"
			                		class="btn btn-danger btn-xs" 
			                		title="Slet" 
			                		onclick="return confirm(\'Er du sikker på du vil slette?\')">
			                			<i class="icon-trash"></i>
			        			</a>
			    			</td>
			                <td style="width:50px;">' . $row->navn . '</td>
			                <td>' . $row->tekst . '</td>
			                <td>' . $row->dato . '</td>
                                        
			            </tr>';
            }
        }
        ?>
    </tbody>
</table>