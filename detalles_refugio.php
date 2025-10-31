<?php
include('clases/Refugio.php');

$clase = new Refugio();
$id = $_GET['id'];
$refugio = $clase->Id($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>En proceso</h3>
        <h3>Acciones</h3>

    <a href="editar_refugio.php?id=<?= $refugio['id_refugio'] ?>">Editar Refugio</a> |
    <a href="controladores/eliminar_refugio.php?id=<?= $refugio['id_refugio'] ?>"> Eliminar Refugio</a>

</body>
</html>