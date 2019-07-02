<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Taula de multiplicar del 7:</h1>
    <table border=1>
        <?php 
            for ($i=0; $i <= 10; $i++) { 
                echo "<tr>";
                for ($j=0; $j < 3; $j++) { 
                    if ($j == 0) {
                        echo "<td>7</td>";
                    } elseif ($j == 1) {
                        echo "<td>".$i."</td>";
                    } elseif($j == 2) {
                        echo "<td>".(7 * $i)."</td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>