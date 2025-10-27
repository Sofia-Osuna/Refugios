<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Formulario usuario</h3><br>
    <form action="controladores/Insertar_usuario.php" method="POST" enctype="multipart/form-data">
        <label for="">nombre de usuario: </label>
        <input class="inp" type="text" name="nombre" id=""><br><br>

        <label for="">contraseña: </label>
        <input class="inp" type="password" name="password" id=""><br><br>
        <!--Que no se me olvide ver como hacer para ocultar y mostrar la contraseña, se hace con javascript, un boton y asi xdxd-->
        <label for="">Foto: </label>
        <input type="file" name="foto"><br><br>
        
        <label for="">correo </label>
        <input class="inp" type="text" name="correo" id=""><br><br>

        <input  class="boton" type="submit" name="guardar" id="">

    </form>

</body>
</html>