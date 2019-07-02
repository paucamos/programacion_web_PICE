<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Conversor dollars a euros:</h1>
    <table border = "1" width="50%">
        <tr>
            <th>$</th>
            <th>€</th>
        </tr>
        <?php 
            $i = 1;
            while ($i<=5000) { 
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $i * 0.94; ?></td>
        </tr>
        <?php 
                if ($i<5) {
                    $i++; 
                } elseif ($i<20) {
                    $i = $i + 5;
                } elseif ($i < 50) {
                    $i = $i + 10;
                } elseif ($i<100) {
                    $i = $i + 50;
                } elseif ($i<500) {
                    $i = $i + 100;
                } elseif ($i<1000) {
                    $i = $i + 500;
                } elseif ($i <= 5000) {
                    $i = $i + 1000;
                }
            }; 
        ?>
    </table>
</body>
</html>