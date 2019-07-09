<?php
/**
 * Created by PhpStorm.
 * User: Pau
 * Date: 2019-07-09
 * Time: 09:05
 */
include ('conection.php');

$supplier = $_POST['supplierId'];
$query = "SELECT * FROM products WHERE SupplierID = $supplier";
$result = $con -> query($query);

$row = $result -> num_rows;
echo $row;