<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $id_mascota = $_POST["id_mascota"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $fk_especie = $_POST["fk_especie"];
    $id_refugio = $_POST["id_refugio"];

    include ('../clases/Mascota.php');
    $clase = new Mascota();
    $resultado = $clase->actualizar($id_mascota, $nombre, $descripcion, $fk_especie);

    if($resultado){
        header('location: ../Lista_mascota.php?id_refugio=' . $id_refugio);
    }else{
        echo "Error";
    }
?>