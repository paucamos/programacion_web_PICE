<?php 
    setcookie("color", $_GET["color"], time()+60); 
    setcookie("pas", 4, time()+60);
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
    <h1>Resum del vehicle:</h1>
    <?php 
        echo $_COOKIE['vehicle']."<br>";
        echo $_COOKIE['estil']."<br>";
        echo $_GET['color']."<br>";
    ?>
    <a href="neteja.php">Neteja les sesions</a>
</body>
</html>