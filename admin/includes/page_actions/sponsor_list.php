<h2>Sponsor Administration</h2>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th colspan="2" ><a href="index.php?page=sponsor_add" class="btn btn-success btn-xs" title="Opret"><i class="icon-plus"></i> Opret</a></th>
            <th>Billed</th>
            <th>Kategori</th>
            <th>Visninger</th>
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

        $sql = "SELECT sponsor.*, kategorier.navn FROM sponsor INNER JOIN kategorier ON fk_kategorier_id = kategorier.id ORDER by fk_kategorier_id";
        $result = $con->query($sql);
        while ($row = $result->fetch_object()) {
            echo '
			            <tr>
			                <td style="width:30px;">
			                	<a 	href="index.php?page=sponsor_update&amp;sponsor_id=' . $row->id . '" 
			            			class="btn btn-primary btn-xs" 
			            			title="Rediger">
			            				<i class="icon-pencil"></i>
			    				</a>
							</td>
			                <td style="width:30px;">
			                	<a 	href="index.php?page=sponsor_delete&amp;sponsor_id=' . $row->id . '" 
			                		class="btn btn-danger btn-xs" 
			                		title="Slet" 
			                		onclick="return confirm(\'Er du sikker på du vil slette?\')">
			                			<i class="icon-trash"></i>
			        			</a>
			    			</td>
			                <td><img src="uploadede_billder/ads/' . $row->billed . '" width="120px"></td>
			                <td>' . $row->navn . '</td>
			                <td>' . $row->visninger . '</td>
                                        
			            </tr>';
        }
        ?>
    </tbody>
</table>