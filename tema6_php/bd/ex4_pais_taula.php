<?php
	include("conection.php");
	$seleccio = $_GET['paisos'];

	$query = "SELECT CompanyName, ContactName, City, Country FROM customers WHERE Country = '$seleccio'";
	$result2 = $con -> query($query); 
?>
<table border="1">
	<?php 
		while ($row2 = $result2 -> fetch_assoc()) {
			echo "<tr>";
				echo "<td>" . $row2['CompanyName'] . "</td>";
				echo "<td>" . $row2['ContactName'] . "</td>";
				echo "<td>" . $row2['City'] . "</td>";
				echo "<td>" . $row2['Country'] . "</td>";
			echo "</tr>";
		}
	?>
</table>