<?php
include('menu.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

$id_usuario = $_GET['id'] ?? null;


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
    <?php 
    

     ?>
    <h3>Editar usuario</h3><br>
    <form action="controladores/actualizar_usuario.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_usuario" value="<?= $usuario['id_usuario'] ?>">

        <label for="">nombre de usuario: </label>
        <input class="inp" type="text" name="nombre" value="<?= htmlspecialchars($usuario['nombre']) ?>" required><br><br>

        <label for="">contraseña: </label>
        <input class="inp" type="text" name="password" value="<?= htmlspecialchars($usuario['password']) ?>" required><br><br>
        <!--Que no se me olvide ver como hacer para ocultar y mostrar la contraseña, se hace con javascript, un boton y asi xdxd-->
        <label for="">Foto: Proximamente......</label>
        <input type="file" name="foto"><br><br>
        
        <label for="">correo </label>
        <input class="inp" type="text" name="correo" value="<?= htmlspecialchars($usuario['correo']) ?>" required><br><br>

        <input  class="boton" type="submit" name="guardar" id="">
</body>
</html>
<?php 
include('Pie_pagina.php');
 ?>