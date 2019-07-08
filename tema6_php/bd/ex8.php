<html>
<head>

</head>
<body>
    <h1> Productes: </h1>
    <?php
        include('conection.php');
        $query = "SELECT * FROM products";
        $result = $con -> query($query);
    ?>
    <table border="1">
        <tr>
            <th>ProductID</th>
            <th>ProductName</th>
            <th>SupplierID</th>
            <th>CategoryID</th>
            <th>QuantityPerUnit</th>
            <th>UnitPrice</th>
            <th>UnitsInStock</th>
            <th>UnitsOnOrder</th>
            <th>ReorderLevel</th>
        </tr>
        <?php
            while($row = $result -> fetch_assoc()) {
                echo "<tr>";
                    echo "<td>".$row['ProductID']."</td>";
                    echo "<td>".$row['ProductName']."</td>";
                    echo "<td>".$row['SupplierID']."</td>";
                    echo "<td>".$row['CategoryID']."</td>";
                    echo "<td>".$row['QuantityPerUnit']."</td>";
                    echo "<td>".$row['UnitPrice']."</td>";
                    echo "<td>".$row['UnitsInStock']."</td>";
                    echo "<td>".$row['UnitsOnOrder']."</td>";
                    echo "<td>".$row['ReorderLevel']."</td>";
                echo "<tr>";
            }
        ?>
    </table>
    <input type="button" value="Afegeix" onclick="window.location='ex8_afegeix.php';">
</body>
</html>
