<?php
/**
 * Created by PhpStorm.
 * User: Pau
 * Date: 2019-07-08
 * Time: 13:36
 */
?>
<table border="1">
    <tr>
        <th>Empresa</th>
        <th>Contacte</th>
    </tr>
    <?php
    include('conection.php');
    $query = "SELECT * FROM suppliers";
    $result = $con->query($query);

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
            echo "<td>" . $row['CompanyName'] . "</td>";
            echo "<td>" . $row['ContactName'] . "</td>";
            echo "<td><a href='ex9_eliminar.php?id=".$row['SupplierID']."'>Elimina</a></td>";
        echo "</tr>";
    }
    ?>
</table>
