<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$id_usuario = $_GET['id'] ?? null;
include('menu.php');


include('clases/Usuario.php');
$clase = new Usuario();
$usuario = $clase->obtenerPorId($id_usuario);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
</head>
<body>
    <h3>Proximamente</h3><br>
    <h4>aqui se podra ver la información completa de un usuario</h4><br>
    <a href="Editar_usuario.php?id=<?= $usuario['id_usuario'] ?>">Editar información</a>
    <a href="controladores/eliminar_especie.php?id=<?= $usuario['id_usuario'] ?>" onclick="return confirm('¿Estás seguro de eliminar esta especie?')">Eliminar</a>
</body>
</html>