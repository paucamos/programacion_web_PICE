<?php session_start();

$_SESSION['color'] = $_GET['color']; ?>

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
    <a href="./ex1.php">Torna</a>
</body>
</html>