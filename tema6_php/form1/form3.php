<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../../tema5_jquery/jquery-3.4.1.min.js"></script>
</head>
<body>
    <h1>Menu del dia:</h1>
    <form action="dades3.php" method="post">
        <table>
        <tr>
            <th>Quant.</th>
            <th>Plat</th>
        </tr>
            <tr>
                <td>
                    <input type="text" name="quantitat_1">
                </td>
                <td>
                    <select name="plat_1" id="seleccio1"></select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="quantitat_2">
                </td>
                <td>
                    <select name="plat_2" id="seleccio2"></select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="quantitat_3">
                </td>
                <td>
                    <select name="plat_3" id="seleccio3"></select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Envia">
    </form>
    <script>
        $(function() {
            function emplenaSelect() {
                var select1 = "";
                var cadena1 = "";
                var cadena2 = "";
                var cadena3 = "";

                cadena1 += '<option value=""> -- Selecciona un plat -- </option>';
                cadena1 += '<option value="1">Amanida</option>';
                cadena1 += '<option value="2">Sopa</option>';
                cadena1 += '<option value="3">Canelons</option>';
                $('#seleccio1').html(cadena1);

                var select2 = "";
                cadena2 += '<option value=""> -- Selecciona un plat -- </option>';
                cadena2 += '<option value="1">Amanida</option>';
                cadena2 += '<option value="2">Sopa</option>';
                cadena2 += '<option value="3">Canelons</option>';
                $('#seleccio2').html(cadena2);

                var select3 = "";
                cadena3 += '<option value=""> -- Selecciona un plat -- </option>';
                cadena3 += '<option value="1">Amanida</option>';
                cadena3 += '<option value="2">Sopa</option>';
                cadena3 += '<option value="3">Canelons</option>';
                $('#seleccio3').html(cadena3);
            }
            $('#seleccio1').change(function() {
                var cadena = "";
                var seleccio1 = $('#seleccio1').val();
                $('#seleccio2').empty();
                switch (seleccio1) {
                    case "1":
                        cadena += '<option value=""> -- Selecciona un plat -- </option>';
                        cadena += '<option value="2">Sopa</option>';
                        cadena += '<option value="3">Canelons</option>';
                        break;

                    case "2": 
                        cadena += '<option value=""> -- Selecciona un plat -- </option>';
                        cadena += '<option value="1">Amanida</option>';
                        cadena += '<option value="3">Canelons</option>';
                        break;

                    case "3": 
                        cadena += '<option value=""> -- Selecciona un plat -- </option>';
                        cadena += '<option value="1">Amanida</option>';
                        cadena += '<option value="2">Sopa</option>';
                        break;
                }
                $('#seleccio2').html(cadena);
            });
            emplenaSelect();
        });
    </script>
</body>
</html>