<?php if($_COOKIE['pas']){
    if ($_COOKIE['pas'] == 4) {
        $newURL = "pasResum.php";
        header('Location: '.$newURL);
    } else {
        $newURL = "pas".$_COOKIE['pas'].".php";
        header('Location: '.$newURL);
    }
} else { ?>
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
    <h1>Selecciona el tipus de vehicle:</h1>
    <input type="radio" name="vehicle" id="cotxe" value="Cotxe"> Cotxe <br>
    <input type="radio" name="vehicle" id="moto" value="Moto"> Moto

    <script>
        $(function() {
            $('input[name=vehicle]').change(function() {
                var input = $('input[name=vehicle]:checked').val();
                window.location.href = "pas2.php?vehicle=" + input;
            });
        });
    </script>
</body>
</html>
    <?php } ?>