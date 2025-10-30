<?php
    error_reporting(E_ALL); //esto es para que me muestre los errores
    ini_set('display_errors', 1);

    $nombre = $_POST["nombre"];

    include('../clases/Especie.php');
    $clase = new Especie();
    $resultado = $clase ->guardar($nombre);
   

    if($resultado){
        header('location: ../Lista_especie.php');
       
    }else{
        echo"Error";
    }
    

?>