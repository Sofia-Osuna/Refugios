<?php 
include('menu.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <!-- Header principal -->
    <header class="header-principal">
       
    </header>

    <!-- Segundo header / barra de navegación amarilla -->
    <nav class="sub-navbar">
        <ul>
            <li><a href="#">Ver mascotas</a></li>
            <li><a href="#">Historias felices</a></li>
            <li><a href="#">Formulario de adopción</a></li>
            <li><a href="#">Respuestas</a></li>
            <li><a href="#">Editar</a></li>
        </ul>
    </nav>

    <h1>Lista historias felices</h1>

    <!-- Contenedor de tarjetas -->
    <div class="cards-container">
        <div class="card">
            
            <h2>Imagen</h2>
            <p>Descripción del refugio</p>
            <button>Ver más información</button>
        </div>

        <div class="card">
            
            <h2>Imagen</h2>
            <p>Descripción del refugio</p>
            <button>Ver más información</button>
        </div>

        </div>
    </div>

<?php
include('Pie_pagina.php');
?>
</body>
</html>
