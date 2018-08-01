<h2>Sponsor Tekst</h2>
<?php
if (isset($_POST['gem-info'])) {
    $tekst = $_POST['text'];
  


    $sql = "UPDATE `sponsorinfo` SET `tekst`= '{$tekst}' WHERE 1";

    $result = $con->query($sql);

    header("Location: index.php?page=sponsorinfo");
}

$sql = "SELECT * FROM sponsorinfo WHERE id = 1";
$result = $con->query($sql);
while ($row = $result->fetch_object()) {
    $tekst = $row->tekst;
}
?> 
<div class="col-lg-12">
    <form method="post" role="form">
        <div class="form-group">
            <label for="text">Sponsor Tekst</label>

            <textarea class="form-control" name="text" id="text" placeholder="Nyheds Tekst" rows="10" required><?php echo $tekst; ?></textarea>
            <script>
                CKEDITOR.replace('text');
            </script>
        </div>

        <input type="submit" class="btn btn-success" name="gem-info" value="Gem" />
        <a href="index.php" class="btn btn-default" onclick="return confirm('Er du sikker på du vil annullere?')">Annuller</a>
    </form>

    <h2>Sponsor Pris Info</h2>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th colspan="2" ><a href="index.php?page=sponsorinfo_add" class="btn btn-success btn-xs" title="Opret"><i class="icon-plus"></i> Opret</a></th>
                <th>Visninger</th>
                <th>Priser</th>
            </tr>
        </thead>
        <tfoot>
            <tr>

            </tr>
        </tfoot>
        <tbody>
            <?php
            if ($_SESSION['role'] > 1) {
                die(header('location: index.php'));
            }

            $sql = "SELECT * FROM sponsorinfo WHERE id > 1";
            $result = $con->query($sql);
            while ($row = $result->fetch_object()) {
                echo '
			            <tr>
			                <td style="width:30px;">
			                	<a 	href="index.php?page=sponsorinfo_update&amp;sponsor_id=' . $row->id . '" 
			            			class="btn btn-primary btn-xs" 
			            			title="Rediger">
			            				<i class="icon-pencil"></i>
			    				</a>
							</td>
			                <td style="width:30px;">
			                	<a 	href="index.php?page=sponsorinfo_delete&amp;sponsor_id=' . $row->id . '" 
			                		class="btn btn-danger btn-xs" 
			                		title="Slet" 
			                		onclick="return confirm(\'Er du sikker på du vil slette?\')">
			                			<i class="icon-trash"></i>
			        			</a>
			    			</td>
			                <td>' . $row->visninger . '</td>
			                <td>' . $row->priser . ' kr.</td>
                                        
			            </tr>';
            }
            ?>
        </tbody>
    </table>