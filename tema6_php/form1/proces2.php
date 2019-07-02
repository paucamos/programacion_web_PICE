<h1>Taula de multiplicar del <?php echo $num = $_POST['numero'];?>: </h1>
<table border=1>
        <?php 
            for ($i=0; $i <= 10; $i++) { 
                echo "<tr>";
                for ($j=0; $j < 3; $j++) { 
                    if ($j == 0) {
                        echo "<td>".$num."</td>";
                    } elseif ($j == 1) {
                        echo "<td>".$i."</td>";
                    } elseif($j == 2) {
                        echo "<td>".($num * $i)."</td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>