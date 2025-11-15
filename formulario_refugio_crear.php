<?php 
include('menu.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario refugio</title>

    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <form>
        <label>Nombre de la mascota</label>
        <input type="text" name="nombre_mascota">

        <label>Descripción</label>
        <textarea name="descripcion"></textarea>

        <label>Teléfono</label>
        <input type="text" name="telefono">

        <h3 style="text-align: left;">Dirección</h3>

        <div class="flex-row">
            <div>
                <label>Estado</label>
                <input type="text" name="estado">
            </div>
            <div>
                <label>Municipio</label>
                <input type="text" name="municipio">
            </div>
        </div>

        <div class="flex-row">
            <div>
                <label>Nombre de la calle</label>
                <input type="text" name="calle">
            </div>
            <div>
                <label>Colonia</label>
                <input type="text" name="colonia">
            </div>
        </div>

        <div class="flex-row">
            <div>
                <label>Número interior</label>
                <input type="text" name="numero_interior">
            </div>
            <div>
                <label>Número exterior</label>
                <input type="text" name="numero_exterior">
            </div>
        </div>

        <label>Código postal</label>
        <input type="text" name="codigo_postal">

        <label>Seleccione una especie</label>
        <select name="especie">
        </select>

        <button type="submit">Confirmar</button>
    </form>

    <?php
    include('Pie_pagina.php'); 
    ?>

</body>
</html>
