<?php
	include('conection.php');
	$sql = "SELECT suppliers.CompanyName, products.ProductName, products.CategoryID, categories.CategoryName, categories.Description
			FROM products
				LEFT JOIN categories
					ON products.CategoryID = categories.CategoryID
				LEFT JOIN suppliers
					ON products.SupplierID = suppliers.SupplierID";

	$result = $con -> query($sql);
	echo "<table border=1>";
	while ($row = $result -> fetch_assoc()) {
		echo "<tr>";
			echo "<td>".$row["ProductName"]."</td>";
			echo "<td>".$row["CategoryID"]."</td>";
			echo "<td>".$row["CategoryName"]."</td>";
			echo "<td>".$row["Description"]."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>