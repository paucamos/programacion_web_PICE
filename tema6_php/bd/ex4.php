<?php 
	include("conection.php"); 
	$query = "SELECT Country FROM customers GROUP BY Country";
	$query2 = "SELECT City FROM customers WHERE Country = 'Germany' GROUP BY City";
	$result = $con -> query($query);
	$result2 = $con -> query($query2);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../../tema5_jquery/jquery-3.4.1.min.js"></script>
</head>
<body>
	<label for="paisos">Pais:</label>
	<select name="paisos" id="selectPaisos">
		<option> -- Seleccioni un pais -- </option>
		<?php
			while ($row = $result -> fetch_assoc()) {
				echo "<option>" . $row['Country'] . "</option>";
			}
		?>
	</select>
	<span id="select2"></span>
	<div id="resultat"></div>
	<script type="text/javascript">
		$(document).on("change", "#selectCiutats", function() {
			var seleccio = $('#selectPaisos').val();
			var seleccio2 = $('#selectCiutats').val();
			var link = "ex4_pais.php?paisos=" + seleccio + "&ciutats=" + seleccio2;
			$.ajax({
				url: link,
				method: "GET",
				success: function(data, status) {
					$('#resultat').html(data);
				}
			});
		});
		$(function() {
			$('#selectPaisos').change(function() {
				var seleccio = $('#selectPaisos').val();
				var link = "ex4_dades.php?paisos=" + seleccio;
				$.ajax({
					url: link,
					method: "GET",
					success: function(data, status) {
						$('#select2').html(data);
					}
				});
				$.ajax({
					url: "ex4_pais_taula.php?paisos=" + seleccio,
					method: "GET",
					success: function(data, status) {
						$('#resultat').html(data);
					}
				});
			});
		});
	</script>
</body>
</html>