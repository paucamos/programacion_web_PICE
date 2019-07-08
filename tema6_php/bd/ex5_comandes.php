<?php
	include('conection.php');

	$customer_id = $_GET['customerid'];

	$query = "SELECT * FROM orders WHERE CustomerID = '$customer_id'";
	$result = $con -> query($query);
?>
<table border="1">
	<tr>
		<th>Order ID</th>
		<th>Customer ID</th>
		<th>Order Date</th>
		<th>Ship Address</th>
		<th>Ship Country</th>
	</tr>
	<?php 
	$cadena = "";
		while ($row = $result -> fetch_assoc()) {
			$cadena .= "<tr class='fila_order' order-id='".$row["OrderID"]."'>";
					$cadena .= "<td>".$row["OrderID"]."</td>";
					$cadena .= "<td>".$row["CustomerID"]."</td>";
					$cadena .= "<td>".$row["OrderDate"]."</td>";
					$cadena .= "<td>".$row["ShipAddress"]."</td>";
					$cadena .= "<td>".$row["ShipCountry"]."</td>";
				$cadena .= "</tr>";
			}
			echo $cadena;
	?>
</table>