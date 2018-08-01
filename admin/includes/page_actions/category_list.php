<h2>Kategori Administration</h2>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th colspan="2" ><a href="index.php?page=category_add" class="btn btn-success btn-xs" title="Opret"><i class="icon-plus"></i> Opret</a></th>
            <th>Id</th>
            <th>Navn</th>
            <th>Sortering</th>
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

        $sql = "SELECT * FROM kategorier ORDER BY sortering";
        $result = $con->query($sql);
        while ($row = $result->fetch_object()) {
            echo '
			            <tr>
			                <td style="width:30px;">
			                	<a 	href="index.php?page=category_update&amp;category_id=' . $row->id . '" 
			            			class="btn btn-primary btn-xs" 
			            			title="Rediger">
			            				<i class="icon-pencil"></i>
			    				</a>
							</td>
			                <td style="width:30px;">
			                	<a 	href="index.php?page=category&amp;category_id=' . $row->id . '" 
			                		class="btn btn-danger btn-xs" 
			                		title="Slet" 
			                		onclick="return confirm(\'Er du sikker på du vil slette?\')">
			                			<i class="icon-trash"></i>
			        			</a>
			    			</td>
			                <td style="width:50px;">' . $row->id . '</td>
			                <td>' . $row->navn . '</td>
			                <td>' . $row->sortering . '</td>
                                        
			            </tr>';
        }
        ?>
    </tbody>
</table>