<?php
require_once('clases/Mascota.php');

$id_refugio = $_GET['id_refugio'];



$clase = new Mascota();
$mascotas = $clase->mostrarPorRefugio($id_refugio);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Mascotas</title>
</head>
<body>
    <h1>Lista de Mascotas del Refugio</h1>
    
<a href="Formulario_mascota.php?id_refugio=<?= $id_refugio ?>">+ Nueva Mascota</a>
    
    <br><br>
    
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Especie</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if(count($mascotas) > 0){
                foreach($mascotas as $mascota){ 
            ?>
                <tr>
                    <td><?= $mascota['id_mascotas'] ?></td>
                    <td><?= $mascota['nombre'] ?></td>
                    <td><?= $mascota['descripcion'] ?></td>
                    <td><?= $mascota['fk_especie'] ?></td>
                    <td>
                        <a href="Editar_mascota.php?id=<?= $mascota['id_mascotas'] ?>&id_refugio=<?= $id_refugio ?>">Editar</a> |
                        <a href="controladores/eliminar_mascota.php?id=<?= $mascota['id_mascotas'] ?>&id_refugio=<?= $id_refugio ?>" 
                           onclick="return confirm('¿Estás seguro de eliminar esta mascota?')">Eliminar</a>
                    </td>
                </tr>
            <?php 
                }
            } else {
            ?>
                <tr>
                    <td colspan="5" style="text-align: center;">No hay mascotas registradas en este refugio</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>