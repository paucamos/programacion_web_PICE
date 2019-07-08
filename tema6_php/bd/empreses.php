<?php
	$server = "localhost";
	$username = "root";
	$password = "root";
	$database = "proves";

	$con = new mysqli($server, $username, $password, $database);

	$empresa = $_GET['nomEmpresa'];

	$query = "SELECT * FROM customers WHERE CompanyName LIKE '%$empresa%'";

	$result = $con -> query($query);
?>	

	<table border="1">
		<tr>
			<th>CustomerID</th>
			<th>Company Name</th>
			<th>Contact Name</th>
			<th>Country</th>
			<th>Phone</th>
		</tr>
		<?php
			if (isset($empresa)) {
				while ($row = $result -> fetch_assoc()) {
					echo "<tr>";
						echo "<td>". $row['CustomerID']."</td>";
						echo "<td>". $row['CompanyName']."</td>";
						echo "<td>". $row['ContactName']."</td>";
						echo "<td>". $row['Country']."</td>";
						echo "<td>". $row['Phone']."</td>";
					echo "</tr>";
				}
			} else {
				echo "";
			}
		?>
	</table>