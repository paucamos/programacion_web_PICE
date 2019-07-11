<?php include('bd/conection.php'); ?>
<html>
<head>

</head>
<body>
<h1> Productes: </h1>
<form method="POST" action="ex6_insert.php" enctype="multipart/form-data">
    Product Name:
    <input type="text" name="prodName"><br>

    Supplier:
    <select name="suppName">
        <option>-- Escull un supplier --</option>
        <?php
            $supplier = "SELECT * FROM suppliers";
            $result = $con -> query($supplier);

            while ($row = $result -> fetch_assoc()) {
                echo "<option value='".$row['SupplierID']."'>".$row['CompanyName']."</option>";
            }
        ?>
    </select><br>

    Categoria:
    <select name="catName">
        <option>-- Selecciona una categoria --</option>
        <?php
            $supplier = "SELECT * FROM categories";
            $result = $con -> query($supplier);

            while ($row = $result -> fetch_assoc()) {
                echo "<option value='".$row['CategoryID']."'>".$row['CategoryName']."</option>";
            }
        ?>
    </select><br>

    Quantity:
    <input type="text" name="quantity"><br>

    Unit Price:
    <input type="text" name="unitPrice"><br>

    Units in stock:
    <input type="text" name="unitsStock"><br>

    Units in order:
    <input type="text" name="unitsOrder"><br>

    Reorder level:
    <input type="text" name="reorderLvl"><br>

    Discontinued:
    <input type="checkbox" name="discontinued" value="1"><br>

    Product photo:
    <input type="file" name="prodPhoto"><br>

    <input type="submit">
</form>
</body>
</html>
