<?php
include('../clases/Refugio.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $refugio = new Refugio();
    
    $resultado = $refugio->actualizar(
        $_POST['id_refugio'],
        $_POST['nombre'],
        $_POST['descripcion'],
        $_POST['estado'],
        $_POST['municipio'],
        $_POST['nombre_calle'],
        $_POST['numero_exterior'],
        $_POST['numero_interior'],
        $_POST['cp']
    );
    
    if($resultado){
        echo "Refugio actualizado correctamente";
        header("Location: ../Lista_refugio.php");
    } else {
        echo "Error al actualizar";
    }
}
?>