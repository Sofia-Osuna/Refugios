<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        h3{
            text-align: center;
            
        }

        label{
            text-align: center;
            display: block;
        }

        input{
            margin: 0 auto;
            display: block;
        }

        
    </style>
</head>
<body>
    <br>
    <h3>Crea tu cuenta</h3><br>
    <form action="controladores/Insertar_usuario.php" method="POST" enctype="multipart/form-data">
        <label for="">Nombre de usuario:</label>
        <br>
        <input class="inp" type="text" name="nombre" id=""><br><br>

        <label for="">Contraseña: </label>
        <br>
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