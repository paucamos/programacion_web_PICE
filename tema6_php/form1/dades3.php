
<html>
<style>
    img {
        width: 200px;
        height: 100px;
        float: left;
    }
</style>
<h1>Plats escollits:</h1>
<?php
$quant1 = $_POST['quantitat_1'];
$quant2 = $_POST['quantitat_2'];
$quant3 = $_POST['quantitat_3'];

$plat1 = $_POST['plat_1'];
$plat2 = $_POST['plat_2'];
$plat3 = $_POST['plat_3'];

$llistaImg = ["","img1.jpg","img2.jpg","img3.jpg"];

for ($i=0; $i < $quant1; $i++) { 
    echo "<img src='".$llistaImg[1]."'>";
}
for ($i=0; $i < $quant2; $i++) { 
    echo "<img src='".$llistaImg[2]."'>";
}
for ($i=0; $i < $quant3; $i++) { 
    echo "<img src='".$llistaImg[3]."'>";
} ?>
</html>