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
    <h1>Selecciona el tipus:</h1>
    <input type="radio" name="vehicle" id="cotxe" value=1> Cotxe <br>
    <input type="radio" name="vehicle" id="moto" value=2> Moto

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