<?php 
    setcookie("estil", $_GET["estil"], time()+60); 
    setcookie("pas", 3, time()+60);
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
    <h1>Selecciona el color del vehicle:</h1>
    <input type="radio" name="color" id="blau" value="Blau"> Blau <br>
    <input type="radio" name="color" id="blanc" value="Blanc"> Blanc <br>
    <input type="radio" name="color" id="negre" value="Negre"> Negre

    <script>
        $(function() {
            $('input[name=color]').change(function() {
                var input = $('input[name=color]:checked').val();
                window.location.href = "pasResum.php?color=" + input;
            });
        });
    </script>
</body>
</html>