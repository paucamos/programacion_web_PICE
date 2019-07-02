<?php 
    setcookie("vehicle", $_GET["vehicle"], time()+60); 
    setcookie("pas", 2, time()+60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../../../tema5_jquery/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php
    if($_COOKIE['vehicle']) {
        if($_COOKIE['vehicle'] == "Cotxe"){ 
?>
            <h1>Selecciona el tipus de cotxe:</h1>
            <input type="radio" name="estil" id="util" value="Utilitari"> Utilitari <br>
            <input type="radio" name="estil" id="familiar" value="Familiar"> Familiar <br>
            <input type="radio" name="estil" id="descapotable" value="Descapotable"> Descapotable
<?php   } elseif ($_COOKIE['vehicle'] == "Moto") { 
?>
            <h1>Selecciona el tipus de moto:</h1>
            <input type="radio" name="estil" id="carretera" value="Carretera"> Carretera <br>
            <input type="radio" name="estil" id="enduro" value="Enduro"> Enduro <br>
        <?php }
    } else {
        if($_GET['vehicle'] == "Cotxe"){ 
        ?>
            <h1>Selecciona el tipus de cotxe:</h1>
            <input type="radio" name="estil" id="util" value="Utilitari"> Utilitari <br>
            <input type="radio" name="estil" id="familiar" value="Familiar"> Familiar <br>
            <input type="radio" name="estil" id="descapotable" value="Descapotable"> Descapotable
<?php   } elseif ($_GET['vehicle'] == "Moto") { ?>
            <h1>Selecciona el tipus de moto:</h1>
            <input type="radio" name="estil" id="carretera" value="Carretera"> Carretera <br>
            <input type="radio" name="estil" id="enduro" value="Enduro"> Enduro <br>
<?php   }
    } 
?>
    <script>
        $(function() {
            $('input[name=estil]').change(function() {
                var input = $('input[name=estil]:checked').val();
                window.location.href = "pas3.php?estil=" + input;
            });
        });
    </script>
</body>
</html>