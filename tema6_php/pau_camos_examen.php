<?php
include('bd/conection.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<h1>Comandes:</h1>
Client:
<input type="text" name="client" id="nomClient">

Empleat:
<input type="text" name="empleat" id="nomEmpleat">

<table border="1" id="result">
    <tr>
        <th>Nom client</th>
        <th>Nom empleat</th>
        <th>Data comanda</th>
        <th>Data enviament</th>
        <th>Adreça de enviament</th>
        <th>Pais de envio</th>
    </tr>
    <?php
    if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    } else {
        $pagina = 1;
    }
    $carrega = 25;
    $offset = 0;
    $offset = ($pagina-1) * $carrega;
    $comandes1 = $comandes = "SELECT customers.ContactName, employees.FirstName, employees.LastName, orders.OrderDate, orders.ShippedDate, orders.ShipAddress, orders.ShipCountry 
                          FROM orders
                            LEFT JOIN employees ON employees.EmployeeID = orders.EmployeeID
                            LEFT JOIN customers on customers.CustomerID = orders.CustomerID";
    $comandes2 = "SELECT customers.ContactName, employees.FirstName, employees.LastName, orders.OrderDate, orders.ShippedDate, orders.ShipAddress, orders.ShipCountry 
                          FROM orders
                            LEFT JOIN employees ON employees.EmployeeID = orders.EmployeeID
                            LEFT JOIN customers on customers.CustomerID = orders.CustomerID LIMIT $offset, $carrega ";
    $result1 = $con->query($comandes);
    $result2 = $con ->query($comandes2);



    while ($row = $result2->fetch_assoc()) {
        echo "<tr>";
            echo "<td>" . $row['ContactName'] . "</td>";
            echo "<td>" . $row['FirstName'] . " " . $row['LastName'] . "</td>";
            echo "<td>" . $row['OrderDate'] . "</td>";
            echo "<td>" . $row['ShippedDate'] . "</td>";
            echo "<td>" . $row['ShipAddress'] . "</td>";
            echo "<td>" . $row['ShipCountry'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
<?php
$pagines = ($result1 -> num_rows)/$carrega;

for ($i=1; $i <= ceil($pagines); $i++) {
    echo "<a href='pau_camos_examen.php?pagina=".$i."&seleccio=". $carrega ."'>".$i."</a> ";
}
?>
<br>
<input type="submit" value="Afegir" id="enviar">
<script>
    $(function () {
        $('#enviar').click(function () {
            window.location.replace("pau_camos_examen2.php");
        });
        $('#nomClient').keyup(function () {
            var nomClient = $('#nomClient').val();
            var nomEmpleat = $('#nomEmpleat').val();
            $.ajax({
                url: "comprovaDades.php",
                method: "POST",
                data: {
                    nomClient: nomClient,
                    nomEmpleat: nomEmpleat
                },
                success: function (data) {
                    $('#result').html(data);
                }
            })
        });
        $('#nomEmpleat').keyup(function () {
            var nomClient = $('#nomClient').val();
            var nomEmpleat = $('#nomEmpleat').val();
            $.ajax({
                url: "comprovaDades.php",
                method: "POST",
                data: {
                    nomEmpleat: nomEmpleat,
                    nomClient: nomClient
                },
                success: function (data) {
                    $('#result').html(data);
                }
            })
        });
    });
</script>
</body>
</html>