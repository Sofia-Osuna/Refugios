<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('clases/Especie.php');
$clase = new Especie();
$especies = $clase->mostrar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gestión de Especies</h1>
    
    <?php if(isset($_GET['msg'])): ?>
        <div class="mensaje success">
            <?php 
                if($_GET['msg'] == 'actualizado') echo 'Especie actualizada correctamente';
                if($_GET['msg'] == 'eliminado') echo 'Especie eliminada correctamente';
                if($_GET['msg'] == 'creado') echo 'Especie creada correctamente';
            ?>
        </div>
    <?php endif; ?>
  <a href="formulario_especie.php">+ Nueva Especie</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($especies) > 0): ?>
                <?php foreach($especies as $especie): ?>
                    <tr>
                        <td><?= htmlspecialchars($especie['nombre']) ?></td>
                        <td>
                     <a href="Editar_especie.php?id=<?= $especie['id_especie'] ?>">Editar</a>
                            
                            <a href="controladores/eliminar_especie.php?id=<?= $especie['id_especie'] ?>" 
                               onclick="return confirm('¿Estás seguro de eliminar esta especie?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No hay especies registradas</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
</body>
</html>