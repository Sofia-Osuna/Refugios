<?php 
include('menu.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario especies</title>

    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="form-row">
    <label>Nombre de la mascota</label>
    <input type="text" name="nombre_mascota">
    <button type="submit">Agregar una especie</button>
</div>
<table>
    <tr>
  
        <th>Nombre</th>
        <th>Acciones</th>
      
    </tr>
</table>
  
  
   
    <?php
    include('Pie_pagina.php'); 
    ?>

</body>
</html>


 