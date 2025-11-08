<?php
require_once('clases/Mascota.php');

$id_refugio = $_GET['id_refugio'];

if(empty($id_refugio)){
    die("Error: No se recibió el ID del refugio. <a href='Lista_refugio.php'>Volver</a>");
}

$mascota_obj = new Mascota();
$especies = $mascota_obj->obtenerEspecies();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Mascota</title>
</head>
<body>
    <h1>Agregar Mascota al Refugio</h1>
    
    <form action="controladores/insertar_mascota.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="fk_refugio" value="<?= $id_refugio ?>">
        
        <label for="">Nombre de la mascota: </label>
        <input type="text" name="nombre" required><br><br>

        <label for="">Descripción: </label>
        <textarea name="descripcion" required></textarea><br><br>

        <label for="">Especie: </label>
        <select name="fk_especie" required>
            <option value="">Selecciona una especie</option>
            <?php foreach($especies as $especie){ ?>
                <option value="<?= $especie['id_especie'] ?>">
                    <?= $especie['nombre'] ?>
                </option>
            <?php } ?>
        </select><br><br>

        <input type="submit" name="guardar" value="Guardar Mascota">
        <a href="detalles_refugio.php?id=<?= $id_refugio ?>">Cancelar</a>
    </form>
</body>
</html>