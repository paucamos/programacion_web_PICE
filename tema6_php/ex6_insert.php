<?php
/**
 * Created by PhpStorm.
 * User: Pau
 * Date: 2019-07-10
 * Time: 13:03
 */
include('bd/conection.php');

$nomProd = $_POST['prodName'];
$supName = $_POST['suppName'];
$catName = $_POST['catName'];
$quantity = $_POST['quantity'];
$unitPrice = $_POST['unitPrice'];
$unitsStock = $_POST['unitsStock'];
$unitsOrder = $_POST['unitsOrder'];
$reorderLvl = $_POST['reorderLvl'];
$discontinued = $_POST['discontinued'];
$prodPhotoTmp = $_FILES['prodPhoto']['tmp_name'];
$prodPhotoName = $_FILES['prodPhoto']['name'];

if (!file_exists("uploads")) {
    mkdir("uploads");
}
if (file_exists("uploads/" . $prodPhotoTmp, basename($prodPhotoName))) {
    echo "L'arxiu ja existeix";
} else {
    if (move_uploaded_file($prodPhotoTmp, "uploads/" . basename($prodPhotoName))) { //base name per eliminar la ruta y no donar informació
        $nomFoto = basename($prodPhotoName);
        $query = "INSERT INTO products (ProductName, SupplierID, CategoryID, QuantityPerUnit, UnitPrice, UnitsInStock, UnitsOnOrder, ReorderLevel, Discontinued, Photo ) 
          VALUES ('$nomProd', $supName, $catName, '$quantity', $unitPrice, $unitsStock, $unitsOrder, $reorderLvl, $discontinued, '$nomFoto')";
        $result = $con -> query($query);
?>
        <h1>Producte <?php echo $nomProd; ?></h1>




<?php
    } else {
        echo "Error en la pujada";
    }
}
?>



