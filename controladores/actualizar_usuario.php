<?php
    error_reporting(E_ALL); //esto es para que me muestre los errores
    ini_set('display_errors', 1);

    $id_usuario = $_POST['id_usuario'] ?? null;
    $nombre = $_POST['nombre'] ?? null;
    $password = $_POST['password'] ?? null;
    //$foto = $_POST['foto'] ?? null;
    $correo = $_POST['correo'] ?? null;

    include('../clases/Usuario.php');
    $clase = new Usuario();
    $resultado = $clase->editar($id_usuario, $nombre, $password, $correo);

    if($resultado){
    header('location: ../Lista_usuario.php?msg=actualizado');
} else {
    echo "Error al actualizar";
}
?>