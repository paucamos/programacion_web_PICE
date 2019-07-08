<?php
/**
 * Created by PhpStorm.
 * User: Pau
 * Date: 2019-07-08
 * Time: 10:02
 */

include ('conection.php');
$nom = $_GET['nom'];
$query = "SELECT * FROM products WHERE products.ProductName LIKE '%$nom%'";
$result = $con -> query($query);

echo $resposta = mysqli_num_rows($result);