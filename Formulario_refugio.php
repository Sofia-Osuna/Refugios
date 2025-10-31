<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Refugio</title>
</head>
<body>
    <form action="controladores/Insertar_refugio.php" method="POST" enctype="multipart/form-data">
        <label for="">Nombre del refugio: </label>
        <input class="inp" type="text" name="nombre" id=""><br><br>

        <label for="">descripción del refugio: </label>
        <textarea name="descripcion" id=""></textarea>

        <label for="">Foto: </label>
        <input type="file" name="foto"><br><br>


        <h3>Dirección</h3>

        <label for="">Estado: </label>
        <input class="inp" type="text" name="estado" id=""><br><br>

        <label for="">Municipio: </label>
        <input class="inp" type="text" name="municipio" id=""><br><br>

        <label for="">Nombre de la calle: </label>
        <input class="inp" type="text" name="nombre_calle" id=""><br><br>

        <label for="">Número Interior: </label>
        <input class="inp" type="text" name="numero_interior" id=""><br><br>

        <label for="">Número Exterior: </label>
        <input class="inp" type="text" name="numero_exterior" id=""><br><br>

        <label for="">Codigo Postal: </label>
        <input class="inp" type="text" name="cp" id=""><br><br>

        <input  class="boton" type="submit" name="guardar" id="">
    </form>
</body>
</html>