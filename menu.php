<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/estilo.css">
    <!-- Poner otra imagen, no se con un corazon o algo asi -->
    <link rel="icon" type="image/png" href="img_sistema/logo_color.png"> 
</head>
<body>
<nav class=" navbar navbar-expand-lg navbar-light  navbar-custom">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="#">
        <img  src="img_sistema/logo.png" alt="logo" class="d-inline-block align-text-top me-2" style="height: 60px" >

        RefuPETS
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Iniciar sesion</a></li>
        <!-- Estas opciones de aqui solo apareceran si el usuario esta registrado -->
        <li class="nav-item"><a class="nav-link" href="#">Lista especies</a></li>
        <li class="nav-item"><a class="nav-link" href="Lista_refugio.php">Refugios</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Lista Usuarios</a></li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>