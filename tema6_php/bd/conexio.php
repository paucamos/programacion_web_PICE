<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="conexio.php" method="GET">
		<select name="seleccio">
			<option>-- Selecciona un valor --</option>
			<option value="10">10</option>
			<option value="25">25</option>
			<option value="50">50</option>
			<option value="100">100</option>
		</select>
		<input type="submit" value="Carrega">
	</form>
<?php
	$server = "localhost";
	$username = "root";
	$password = "root";
	$database = "proves";

	$con = new mysqli($server, $username, $password, $database);

	if (isset($_GET['seleccio'])) {
		$carrega = $_GET['seleccio'];
	} else {
		$limit = 10;
		$carrega = 10;
	}

	if (isset($_GET['pagina'])) {
		$pagina = $_GET['pagina'];
	} else {
		$pagina = 1;
	}
	
	$offset = ($pagina-1) * $carrega;

	$total = "SELECT * FROM customers";
	$query = "SELECT * FROM customers LIMIT $offset, $carrega"; //salta 40 registres i mostra els 20 seguents

	$result = $con -> query($query);
	$resultTotal = $con -> query($total);

	if ($con -> connect_error) {
		die ("error!" . $con -> connect_error);
	} else {
		if ($result -> num_rows == 0) {
			echo "No hi ha resultats";
		} else {
			echo "<table border=1>";
			while ($clients = $result -> fetch_assoc()){
				echo "<tr>";
					echo "<td>" . $clients["CustomerID"]	. "</td>";
					echo "<td>" . $clients["CompanyName"]	. "</td>";
					echo "<td>" . $clients["ContactName"]	. "</td>";
					echo "<td>" . $clients["ContactTitle"]	. "</td>";
					echo "<td>" . $clients["Address"]		. "</td>";
					echo "<td>" . $clients["City"]			. "</td>";
					echo "<td>" . $clients["Country"]		. "</td>";
				echo "</tr>";
			}
			echo "</table>";

			$pagines = ($resultTotal -> num_rows)/$carrega;

			for ($i=1; $i <= ceil($pagines); $i++) { 
				echo "<a href='conexio.php?pagina=".$i."&seleccio=". $carrega ."'>".$i."</a> ";
			}
		}
	}
	$con -> close();
?>
</body>
</html>