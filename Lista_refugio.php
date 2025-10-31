<?php
include('clases/Refugio.php');

$clase = new Refugio();
$resultado= $clase->mostrar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Refugios</title>
</head>
<body>
    <h1>Lista de Refugios</h1>
    
    <a href="formulario_refugio.php">+ Nuevo Refugio</a>
    
    <br><br>
    
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Municipio</th>
                <th>Acciones</th>
            </tr>
        </thead>
            <?php 
            foreach($resultado as $refugio){ 
?>
                 
                <tr>
                    <td><?= $refugio['nombre'] ?></td>
                    <td><?= $refugio['descripcion'] ?></td>
                    <td><?= $refugio['estado'] ?></td>
                    <td><?= $refugio['municipio'] ?></td>
                    <td>
                        <a href="detalles_refugio.php?id=<?= $refugio['id_refugio'] ?>">Ver Detalles</a> |
                    </td>
                </tr>
            <?php 
            }
             ?>
    </table>
</body>
</html>