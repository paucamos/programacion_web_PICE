<?php
/**
 * Created by PhpStorm.
 * User: Pau
 * Date: 2019-07-11
 * Time: 10:07
 */
include('bd/conection.php');

$customerID = $_POST['client'];
$employeeID = $_POST['empleat'];
$orderDate = $_POST['orderdate'];
$shipAdress = $_POST['shipaddress'];
$shipCountry = $_POST['shipcountry'];

//segon insert extra

$quantity = $_POST['quantity'];
$productID = $_POST['producte'];

$sql_order = "INSERT INTO orders (CustomerID,EmployeeID,OrderDate,ShipAddress,ShipCountry) 
VALUES ('$customerID', $employeeID, '$orderDate', '$shipAdress', '$shipCountry')";

$sql_order_details_select = "SELECT * FROM orders WHERE orders.CustomerID = '$customerID' ORDER BY OrderID DESC LIMIT 1";

$result = $con->query($sql_order);
$result2 = $con->query($sql_order_details_select);

$sqlProductsSelect = "SELECT * FROM products WHERE ProductID = $productID";
$result3 = $con->query($sqlProductsSelect);
$assocProd = $result3->fetch_assoc();

$row = $result2->fetch_assoc();

$orderID = $row['OrderID'];
$unitPrice = $assocProd['UnitPrice'];

$insert_order_details = "INSERT INTO order_details (OrderID, ProductID, UnitPrice, Quantity, Discount) 
VALUES ($orderID, $productID, $unitPrice, $quantity, 0.3)";

$result4 = $con->query($insert_order_details);

header('Location: pau_camos_examen.php');