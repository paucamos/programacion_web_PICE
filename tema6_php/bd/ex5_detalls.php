<?php
	include('conection.php');

	$order_id = $_GET['orderid'];

	$query = "SELECT * FROM order_details WHERE OrderID = '$order_id'";
	$result = $con -> query($query);
?>
<table border="1">
	<tr>
		<th>Order ID</th>
		<th>Product ID</th>
		<th>Unit Price</th>
		<th>Quantity</th>
		<th>Discount</th>
	</tr>
	<?php 
	$cadena = "";
		while ($row = $result -> fetch_assoc()) {
			$cadena .= "<tr class='fila_detalls'>";
					$cadena .= "<td>".$row["OrderID"]."</td>";
					$cadena .= "<td>".$row["ProductID"]."</td>";
					$cadena .= "<td>".$row["UnitPrice"]."</td>";
					$cadena .= "<td>".$row["Quantity"]."</td>";
					$cadena .= "<td>".$row["Discount"]."</td>";
				$cadena .= "</tr>";
			}
			echo $cadena;
	?>
</table>