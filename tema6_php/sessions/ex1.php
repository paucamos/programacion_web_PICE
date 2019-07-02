<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $_SESSION['color']; ?>.css">
</head>
<body>
    <a href="./dades.php?color=vermell" name="vermell">Vermell</a>
    <a href="./dades.php?color=verd" name="verd">Verd</a>
    <a href="./dades.php?color=blau" name="blau">Blau</a>
    <a href="./exemple1.php">Pagina exemple</a>
</body>
</html>