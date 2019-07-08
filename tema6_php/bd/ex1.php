<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$server = "localhost";
		$username = "root";
		$password = "root";
		$database = "proves";

		$con = new mysqli($server, $username, $password, $database);

		$query = "SELECT * FROM products WHERE ProductName LIKE '%Anton%'";

		$result = $con -> query($query);

		$cadena = "";
		$cadena .= "<table border=1>";
			/*$cadena .= "<tr>";
				$cadena .= "<th>Product ID</th>";
				$cadena .= "<th>Product Name</th>";
				$cadena .= "<th>Supplier ID</th>";
				$cadena .= "<th>Category ID</th>";
				$cadena .= "<th>Quantity Per Unit</th>";
				$cadena .= "<th>Unit Price</th>";
				$cadena .= "<th>Units In Stock</th>";
			$cadena .= "</tr>";*/
		while ($row = $result -> fetch_assoc()) {
			$cadena .= "<tr>";
				$cadena .= "<td>".$row['ProductID']."</td>";
				$cadena .= "<td>".$row['ProductName']."</td>";
				$cadena .= "<td>".$row['SupplierID']."</td>";
				$cadena .= "<td>".$row['CategoryID']."</td>";
				$cadena .= "<td>".$row['QuantityPerUnit']."</td>";
				$cadena .= "<td>".$row['UnitPrice']."</td>";
				$cadena .= "<td>".$row['UnitsInStock']."</td>";
			$cadena .= "</tr>";
		}
		$cadena .= "</table>";
		echo $cadena;
	?>
</body>
</html>