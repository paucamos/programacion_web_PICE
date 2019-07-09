<?php
/**
 * Created by PhpStorm.
 * User: Pau
 * Date: 2019-07-09
 * Time: 09:40
 */
include ('conection.php');
$supplier = $_POST['supplierId'];

$query = "DELETE FROM suppliers WHERE SupplierID = $supplier";
$result = $con -> query($query);