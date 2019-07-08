<?php
/**
 * Created by PhpStorm.
 * User: Pau
 * Date: 2019-07-08
 * Time: 10:46
 */
    include ('conection.php');

    $nomProducte = $_POST['nomProducte'];
    $supplier = $_POST['supplier'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $order_units = $_POST['order_units'];
    $reorder_level = $_POST['reorder_level'];
    $discontinued = $_POST['discontinued'];

    $query = "INSERT INTO products (ProductName, SupplierID, CategoryID, QuantityPerUnit, UnitPrice, UnitsInStock, UnitsOnOrder, ReorderLevel, Discontinued)
              VALUES ('$nomProducte', $supplier, $category, '$quantity', $price, $stock, $order_units, $reorder_level, $discontinued)";

    $res = $con -> query($query);