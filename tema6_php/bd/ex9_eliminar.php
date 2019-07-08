<?php
/**
 * Created by PhpStorm.
 * User: Pau
 * Date: 2019-07-08
 * Time: 13:43
 */
include ('conection.php');
$id = $_GET['id'];
$query = "DELETE FROM suppliers WHERE SupplierID ='$id'";
$result = $con -> query($query);