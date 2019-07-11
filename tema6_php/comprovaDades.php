<?php
/**
 * Created by PhpStorm.
 * User: Pau
 * Date: 2019-07-11
 * Time: 09:51
 */
include('bd/conection.php');
$nomClient = $_POST['nomClient'];
$nomEmpleat = $_POST['nomEmpleat'];
$query = "SELECT customers.ContactName, employees.FirstName, employees.LastName, orders.OrderDate, orders.ShippedDate, orders.ShipAddress, orders.ShipCountry 
            FROM orders
              LEFT JOIN employees ON employees.EmployeeID = orders.EmployeeID
              LEFT JOIN customers on customers.CustomerID = orders.CustomerID
            WHERE customers.ContactName LIKE '%$nomClient%' AND employees.FirstName LIKE '%$nomEmpleat%'";
$result = $con->query($query);
?>

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

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
        echo "<td>" . $row['ContactName'] . "</td>";
        echo "<td>" . $row['FirstName'] . " " . $row['LastName'] . "</td>";
        echo "<td>" . $row['OrderDate'] . "</td>";
        echo "<td>" . $row['ShippedDate'] . "</td>";
        echo "<td>" . $row['ShipAddress'] . "</td>";
        echo "<td>" . $row['ShipCountry'] . "</td>";
    echo "</tr>";
}