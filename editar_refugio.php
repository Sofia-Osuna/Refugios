<?php
include('clases/Refugio.php');

$clase = new Refugio();
$id = $_GET['id'];
$refugio = $clase-> Id($id);
$estados = $clase->getConexion()->query("SELECT id_estado, nombre FROM estado");
$municipios = $clase->conexion->query("SELECT id_municipio, nombre FROM municipio");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Refugio</title>

<body>
    <form action="controladores/actualizar_refugio.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_refugio" value="<?= $refugio['id_refugio'] ?>">
        
        <label for="">Nombre del refugio: </label>
        <input class="inp" type="text" name="nombre" value="<?= $refugio['nombre'] ?>"><br><br>

        <label for="">descripción del refugio: </label>
        <textarea name="descripcion"><?= $refugio['descripcion'] ?></textarea>

        <label for="">Foto: </label>
        <input type="file" name="foto"><br><br>


        <h3>Dirección</h3>

<label for="">Estado: </label>
<select class="inp" name="estado">
<?php while($est = $estados->fetch_assoc()){ ?>
    <option value="<?= $est['nombre'] ?>" <?= $est['id_estado'] == $refugio['fk_estado'] ? 'selected' : '' ?>>
        <?= $est['nombre'] ?>
    </option>
<?php } ?>
</select><br><br>

<label for="">Municipio: </label>
<select class="inp" name="municipio">
<?php while($mun = $municipios->fetch_assoc()){ ?>
    <option value="<?= $mun['nombre'] ?>" <?= $mun['id_municipio'] == $refugio['fk_municipio'] ? 'selected' : '' ?>>
        <?= $mun['nombre'] ?>
    </option>
<?php } ?>
</select><br><br>

        <label for="">Nombre de la calle: </label>
        <input class="inp" type="text" name="nombre_calle" value="<?= $refugio['nombre_calle'] ?>"><br><br>

        <label for="">Número Interior: </label>
        <input class="inp" type="text" name="numero_interior" value="<?= $refugio['numero_interior'] ?>"><br><br>

        <label for="">Número Exterior: </label>
        <input class="inp" type="text" name="numero_exterior" value="<?= $refugio['numero_exterior'] ?>"><br><br>

        <label for="">Codigo Postal: </label>
        <input class="inp" type="text" name="cp" value="<?= $refugio['cp'] ?>"><br><br>

        <input class="boton" type="submit" name="guardar" value="Actualizar">

    </form>
</body>
</html>