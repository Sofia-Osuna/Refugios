<?php
include('menu.php'); 
require_once('clases/Mascota.php');
$id = $_GET['id'];
$id_refugio = $_GET['id_refugio'];

$mascota_obj = new Mascota();
$mascota = $mascota_obj->obtenerMascota($id);
$especies = $mascota_obj->obtenerEspecies();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Mascota</title>
</head>
<body>

    
    <h1>Editar Mascota</h1>
    
    <form action="controladores/actualizar_mascota.php" method="POST">
        <input type="hidden" name="id_mascota" value="<?= $mascota['id_mascotas'] ?>">
        <input type="hidden" name="id_refugio" value="<?= $id_refugio ?>">
        
        Nombre:<br>
        <input type="text" name="nombre" value="<?= $mascota['nombre'] ?>" required><br><br>
        
        Descripción:<br>
        <textarea name="descripcion" required><?= $mascota['descripcion'] ?></textarea><br><br>
        
        Especie:<br>
        <select name="fk_especie" required>
            <?php foreach($especies as $especie){ ?>
                <option value="<?= $especie['id_especie'] ?>" <?= $especie['id_especie'] == $mascota['fk_especie'] ? 'selected' : '' ?>>
                    <?= $especie['nombre'] ?>
                </option>
            <?php } ?>
        </select><br><br>

        <select>
            <option>Activo</option>
            <option>Inactivo</option>
        </select>
        
        <button type="submit">Actualizar</button>
        <a href="Lista_mascota.php?id_refugio=<?= $id_refugio ?>">Cancelar</a>
    </form>
</body>
</html>
<?php 
include('Pie_pagina.php');
 ?>