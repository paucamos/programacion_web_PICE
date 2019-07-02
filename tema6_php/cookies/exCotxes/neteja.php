<?php
setcookie("vehicle", "",time()-60); 
setcookie("estil", "",time()-60); 
setcookie("color", "",time()-60); 
setcookie("pas", "",time()-60); 

$newURL = "pas1.php";
header('Location: '.$newURL);