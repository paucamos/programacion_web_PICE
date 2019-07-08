<?php 
	include('conection.php');
	$query = "SELECT * FROM customers";
	$result = $con -> query($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../../tema5_jquery/jquery-3.4.1.min.js"></script>
</head>
<style type="text/css">
	.fila:hover, .fila_order:hover {
		background: red;
		color: white;
		cursor: pointer;
	}
	.destacat {
		background: red;
		color: white;
	}
</style>
<body>
	<table border="1">
		<tr>
			<th>Customer ID</th>
			<th>Contact Name</th>
			<th>Country</th>
			<th>Phone</th>
		</tr>
		<?php
			$cadena = "";
			while ( $row = $result -> fetch_assoc()) {
				$cadena .= "<tr class='fila' data-id='".$row["CustomerID"]."'>";
					$cadena .= "<td>".$row["CustomerID"]."</td>";
					$cadena .= "<td>".$row["ContactName"]."</td>";
					$cadena .= "<td>".$row["Country"]."</td>";
					$cadena .= "<td>".$row["Phone"]."</td>";
				$cadena .= "</tr>";
			}
			echo $cadena;
		?>
	</table>
	<div id="resultat_comandes"></div>
	<div id="resultat_detall"></div>
	<script type="text/javascript">
		$(document).on('click', ".fila_order", function() {
			var id2 = $(this).attr('order-id');
			$('.fila_order').removeClass("destacat");
			$(this).addClass("destacat");
			var link = "ex5_detalls.php?orderid=" + id2;
			$.ajax({
				url: link,
				method: "GET",
				success: function(data, status) {
					$('#resultat_detall').html(data);
				}
			});
		});
		$(function() {
			$('.fila').click(function() {
				var id = $(this).attr("data-id");
				$('.fila').removeClass("destacat");
				$(this).addClass("destacat");
				var link = "ex5_comandes.php?customerid=" + id;
				$.ajax({
					url: link,
					method: "GET",
					success: function(data, status) {
						$('#resultat_comandes').html(data);
					}
				});
			});
		});
	</script>
</body>
</html>