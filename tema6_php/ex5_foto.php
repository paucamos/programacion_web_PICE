<?php
//CRUD = Create Read Update Delete
include('./bd/conection.php');

$fitxer = $_FILES['foto']['tmp_name'];
$fitxer2 = $_FILES['foto']['name'];

if (!file_exists("uploads/")) {
    mkdir("uploads", 0777);
}
if (file_exists("uploads/" . basename($fitxer2))) {
    echo "L'arxiu ja existeix";
} else {
    if (move_uploaded_file($fitxer, "uploads/" . basename($fitxer2))) { //base name per eliminar la ruta y no donar informació
        echo "Fitxer pujat correctament";
    } else {
        echo "Error en la pujada";
    }
}