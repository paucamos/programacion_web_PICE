<?php
    include('conection.php');
?>
<html>
<head>
    <script type="text/javascript" src="../../tema5_jquery/jquery-3.4.1.min.js"></script>
</head>
<body>
<form method="GET">
    Nom Producte:
        <input type="text" id="nom_element"> <br>
    Supplier:
        <select name="supplier" id="supplier">
            <option> -- Selecciona un supplier -- </option>
            <?php
                $query = "SELECT SupplierID, CompanyName from suppliers";
                $result = $con -> query($query);
                while ($row = $result -> fetch_assoc()) {
                    echo "<option value='".$row['SupplierID']."'>".$row['CompanyName']."</option>";
                }
            ?>
        </select><br>
    Category:
        <select id="category">
            <option> -- Selecciona una categoria -- </option>
            <?php
            $query2 = "SELECT CategoryID, CategoryName from categories";
            $result2 = $con -> query($query2);
            while ($row2 = $result2 -> fetch_assoc()) {
                echo "<option value='".$row2['CategoryID']."'>".$row2['CategoryName']."</option>";
            }
            ?>
        </select><br>
    Quantity Per Unit:
        <input type="text" id="quantity"><br>
    Unit Price:
        <input type="text" id="price"><br>
    Units In Stock:
        <input type="text" id="stock"><br>
    Units On Order:
        <input type="text" id="order-units"><br>
    Reorder Level:
        <input type="text" id="reorder-level"><br>
    Discontinued:
        <input type="checkbox" id="discontinued"><br>

    <input type="button" value="afegeix" id="btn-afegeix">
</form>
<script>
    $(function(){
        var comp_nom = false; //comproba si existeix el nom
        $('#nom_element').keyup(function(){
            if ($('#nom_element').val() != "") {
                var nom = $('#nom_element').val();
                var comproba = "comproba.php?nom=" + nom;
                $.ajax({
                    url: comproba,
                    method: "GET",
                    success: function (data, status) {
                        if (data == true) {
                            comp_nom = true;
                            $('#nom_element').css("background-color", "red");
                        } else {
                            comp_nom = false;
                            $('#nom_element').css("background-color", "green");
                        }
                    }
                });
            } else {
                $('#nom_element').css("background-color", "white");
            }
        });
        $('#btn-afegeix').click(function () {
            var link = "ex8_insereix_bd.php"
            if (comp_nom == false) {
                var nomProducte = $('#nom_element').val();
                var supplier = $( "#supplier option:selected" ).val();
                var category = $( "#category option:selected" ).val();
                var quantity = $( "#quantity" ).val();
                var price = $( "#price" ).val();
                var stock = $( "#stock" ).val();
                var order_units = $( "#order-units" ).val();
                var reorder_level = $( "#reorder-level" ).val();
                var discontinued = "";

                if ($('#discontinued').prop('checked')) {
                    discontinued = true;
                } else {
                    discontinued = false;
                }

                $.ajax({
                    url: link,
                    method: "POST",
                    data: {
                        nomProducte: nomProducte,
                        supplier: supplier,
                        category: category,
                        quantity: quantity,
                        price: price,
                        stock: stock,
                        order_units: order_units,
                        reorder_level: reorder_level,
                        discontinued: discontinued
                    },
                    success: function (data, status) {
                        window.location.replace("ex8.php");
                    }
                });
            } else {
                alert('Aquest producte ja existeix');
            }
        });
    });
</script>
</body>
</html>
