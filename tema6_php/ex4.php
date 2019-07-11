<html>
<head>
    <link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.min.css">
    <script src="../tema5_jquery/jquery-3.4.1.min.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
</head>
<body>
<div class="container">
    <form method="post">
        <h1>Inserta un treballador: </h1>
        <label for="nom">Nom del treballador: </label>
        <input type="text" name="nom"> <br>

        <label for="cognom">Cognom del treballador: </label>
        <input type="text" name="nom"> <br>

        <label for="data-naixement">Data de naixement: </label>
        <input type="text" id="dataNaixement"><br>

        <label for="data-inici-contracte">Data d'inici del contracte: </label>
        <input type="text" id="dataContracte"><br>

        <label for="data-inici-contracte">Data d'inici del contracte: </label>
        <select>
            <option>-- Selecciona un superior --</option>
            <?php
                include('./bd/conection.php');
                $query = "SELECT FirstName, LastName FROM employees";
                $result = $con -> query($query);

                while ($row = $result ->fetch_assoc()) {
                    echo "<option>".$row['FirstName']." ". $row['LastName']. "</option>";
                }
            ?>
        </select><br>

        <input type="button" value="Inscriu">
    </form>
</div>
<script>
    $(function () {
        var d = new Date();
        var mes = d.getMonth();
        var dia = d.getDate();
        $("#dataNaixement").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "1970:2019"
        });
        $("#dataContracte").datepicker({
            minDate: -7,
            maxDate: "+0m +0d"
        });
    });
</script>
</body>
</html>