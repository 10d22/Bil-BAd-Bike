<h2>Nyhedsbrev Liste</h2>

<table class="table table-striped table-hover">
    <thead>
        <tr>

            <th>Email</th>
            <th>Dato</th>

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

        $sql = "SELECT * FROM nyhedsbrev";
        $result = $con->query($sql);
        while ($row = $result->fetch_object()) {
            echo '
			            <tr>
			                
			                <td>' . $row->email . '</td>
			                <td>' . $row->dato . '</td>
                                        
			            </tr>';
        }
        ?>
    </tbody>
</table>