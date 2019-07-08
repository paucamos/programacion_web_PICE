<?php
	include("conection.php");
	$seleccio = $_GET['paisos'];

	if (isset($seleccio)) {
		$seleccio2 = $_GET['ciutats'];
		$query2 = "SELECT City FROM customers WHERE Country = '$seleccio' GROUP BY City";
		$result2 = $con -> query($query2);
	}
?>
	<label for='ciutats'>Ciutats:</label>
	<select name="ciutats" id="selectCiutats">
			<option>-- Selecciona una ciutat -- </option>
		<?php 
			while ($row2 = $result2 -> fetch_assoc()) {
				echo "<option>" . $row2['City'] . "</option>";
			}?>
		?>
	</select>