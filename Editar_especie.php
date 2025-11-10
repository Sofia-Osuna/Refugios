
<?php
include('menu.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

$id_especie = $_GET['id'] ?? null;

if (!$id_especie) {
    echo "Error: ID no proporcionado";
    exit;
}
include('clases/Especie.php');
$clase = new Especie();
$resultado= $clase->Id($id_especie);

if (!$resultado ){
    echo "Especie no encontrada";
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Especie</title>
</head>
<body>

    <h1>Editar Especie</h1>
    
    <form method="POST" action="controladores/actualizar_especie.php">
        <input type="hidden" name="id_especie" value="<?= $resultado['id_especie'] ?>">
        
        <label>Nombre de la especie:</label>
        <input type="text" name="nombre" value="<?= $resultado['nombre'] ?>" required>
        <br><br>
        
        <button type="submit">Actualizar</button>
        <button> <a href="Lista_especie.php">Cancelar</a> </button> 
    </form>
</body>
</html>
<?php 
include('Pie_pagina.php');
 ?>