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
    <?php if($_GET['vehicle'] == 1){ ?>
        <h1>Selecciona el tipus:</h1>
        <input type="radio" name="estil" id="util" value="1"> Utilitari <br>
        <input type="radio" name="estil" id="familiar" value="2"> Familiar <br>
        <input type="radio" name="estil" id="descapotable" value="3"> Descapotable
    <? } ?>
</body>
</html>