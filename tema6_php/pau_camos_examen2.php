<?php
    include('bd/conection.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
<h1>Fes una comanda:</h1>
<form method="POST" action="afegir.php">
    Client:
    <select name="client">
        <option>-- Selecciona un client --</option>
        <?php
            $clients = "SELECT * FROM customers";
            $res = $con -> query($clients);

            while ($row = $res -> fetch_assoc()) {
                echo "<option value='".$row['CustomerID']."'>".$row['ContactName']."</option>";
            }
        ?>
    </select> <br>

    Empleat:
    <select name="empleat">
        <option>-- Selecciona un empleat --</option>
        <?php
        $empleats = "SELECT * FROM employees";
        $res2 = $con -> query($empleats);

        while ($row2 = $res2 -> fetch_assoc()) {
            echo "<option value='".$row2['EmployeeID']."'>".$row2['FirstName'] . " " . $row2['LastName']."</option>";
        }
        ?>
    </select><br>
    Data pedido:
    <input type="text" id="orderDate" name="orderdate"><br>

    Adreça:
    <input type="text" name="shipaddress"><br>

    Pais:
    <input type="text" name="shipcountry"><br>

    <h2>Productes:</h2>
    Quantitat:
    <input type="text" name="quantity">
    Producte
    <select name="producte">
        <option>-- Escull un producte --</option>
        <?php
        $productes = "SELECT * FROM products";
        $res3 = $con -> query($productes);

        while ($row3 = $res3 -> fetch_assoc()) {
            echo "<option value='".$row3['ProductID']."'>".$row3['ProductName'] . "</option>";
        }
        ?>
    </select> <br>

    <input type="submit">
</form>
<script>
    $(function () {
        $('#orderDate').datepicker({
            dateFormat: 'yy/mm/dd'
        });
    });
</script>
</body>
</html>