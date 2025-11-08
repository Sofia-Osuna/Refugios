<?php
include('clases/Refugio.php');
include('menu.php');

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

    <nav class=" navbar navbar-expand-lg navbar-light  navbar-custom2">
  <div class="container-fluid">
    
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="margenGenerico" href="editar_refugio.php?id=<?= $refugio['id_refugio'] ?>">Editar Refugio</a></li>
        <li class="nav-item"><a href="controladores/eliminar_refugio.php?id=<?= $refugio['id_refugio'] ?>"> Eliminar Refugio</a></li>
        
        <!-- apenas asi me funciono sin el li -->
<a href="Lista_mascota.php?id_refugio=<?= $refugio['id_refugio'] ?>">Lista_mascota</a>

        <li class="nav-item"><a class="nav-link" href="#">Historias Felices</a></li>
        
      </ul>
    </div>
  </div>
</nav> 

</body>
</html>