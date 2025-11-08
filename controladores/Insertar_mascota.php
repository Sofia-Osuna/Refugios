php<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $fk_especie = $_POST["fk_especie"];
    $fk_refugio = $_POST["fk_refugio"];

    include ('../clases/Mascota.php');
    $clase = new Mascota();
    $resultado = $clase->guardar($nombre, $descripcion, $fk_especie, $fk_refugio);

    if($resultado){
        header('location: ../Lista_mascota.php?id_refugio=' . $fk_refugio);
    }else{
        echo "Error";
    }
?>