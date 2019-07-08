<?php
	include("conection.php");
	$query = "SELECT Title, COUNT(TITLE) AS Quantitat FROM employees GROUP BY Title ORDER BY Title ASC";
	$result = $con -> query($query);
?>
	<table border="1">
		<tr>
			<th>LastName</th>
			<th>Name</th>
			<th>Title</th>
			<th>Quantitat</th>
		</tr>
		<?php 
			while ($row = $result -> fetch_assoc()) {
				echo "<tr>";
					echo "<td>" . $row['LastName'] . "</td>";
					echo "<td>" . $row['FirstName'] . "</td>";
					echo "<td>" . $row['Title'] . "</td>";
					echo "<td>" . $row['Quantitat'] . "</td>";
				echo "</tr>";
			}
		?>
	</table>