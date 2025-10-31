<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$id_usuario= $_GET['id'] ?? null;

if (!$id_usuario) {
    echo "Error: ID no proporcionado";
    exit;
}

include('../clases/Usuario.php');
$clase = new Usuario();
$resultado = $clase->eliminar($id_usuario);

if($resultado){
    header('location: ../Lista_usuario.php?msg=eliminado');
} else {
    echo "Error al eliminar";
}

?>
