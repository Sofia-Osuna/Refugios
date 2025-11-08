<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $id = $_GET["id"];
    $id_refugio = $_GET["id_refugio"];

    include ('../clases/Mascota.php');
    $clase = new Mascota();
    $resultado = $clase->eliminar($id);

    if($resultado){
        header('location: ../Lista_mascota.php?id_refugio=' . $id_refugio);
    }else{
        echo "Error";
    }
?>