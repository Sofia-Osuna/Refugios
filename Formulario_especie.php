<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h3>Formulario especie</h3><br>
    <form action="controladores/Insertar_especie.php" method="POST" enctype="multipart/form-data">
        <label for="">nombre de la especie </label>
        <input class="inp" type="text" name="nombre" id=""><br><br>

        <input  class="boton" type="submit" name="guardar" id="">

    </form>
</body>
</html>