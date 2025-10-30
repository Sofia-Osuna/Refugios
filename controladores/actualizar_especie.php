<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$id_especie = $_POST['id_especie'] ?? null;
$nombre = $_POST['nombre'] ?? null;

if (!$id_especie || !$nombre) {
    echo "Datos incompletos";
    exit;
}

include('../clases/Especie.php');
$clase = new Especie();
$resultado = $clase->editar($id_especie, $nombre);

if($resultado){
    header('location: ../Lista_especie.php?msg=actualizado');
} else {
    echo "Error al actualizar";
}
?>