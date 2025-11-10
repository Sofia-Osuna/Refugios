<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/estilo.css">
    <!-- Poner otra imagen, no se con un corazon o algo asi -->
    <link rel="icon" type="image/png" href="img_sistema/logo_color.png"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<style>
  .navbar-collapse {
    background-color: #85B79D;
    padding: 15px;
    margin-top: 10px;
    border-radius: 5px;
}
</style>

<nav class="navbar navbar-dark navbar-custom">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="#">
        <img  src="img_sistema/logo.png" alt="logo" class="d-inline-block align-text-top me-2" style="height: 60px" >

        RefuPETS
    </a>

     <!-- Botón hamburguesa (se muestra en móviles) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- Menú que se colapsa -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Iniciar sesion</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Adoptar</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Refugios</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
      </ul>
    </div>
    
  </div>
</nav>

<!-- Bootstrap JS Bundle (incluye Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>