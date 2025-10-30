<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$id_especie = $_GET['id'] ?? null;

if (!$id_especie) {
    echo "Error: ID no proporcionado";
    exit;
}

include('../clases/Especie.php');
$clase = new Especie();
$resultado = $clase->eliminar($id_especie);

if($resultado){
    header('location: ../Lista_especie.php?msg=eliminado');
} else {
    echo "Error al eliminar";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>eliminado</h1>
</body>
</html>