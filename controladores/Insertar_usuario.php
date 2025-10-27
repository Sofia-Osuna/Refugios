<?php
    error_reporting(E_ALL); //esto es para que me muestre los errores
    ini_set('display_errors', 1);

    $nombre = $_POST["nombre"];
    $password = $_POST["password"];
    //$foto = $_POST["foto"];

    include('../clases/Usuario.php');
    $clase = new Usuario();
    $resultado = $clase ->guardar($nombre, $password);

    if($resultado){
        header('location: ../index.php');
    }else{
        echo"Error";
    }

?>