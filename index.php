<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu principal</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        h1{
            text-align: center;
        }

        .cards-container {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    padding: 20px;
}

.card {
    width: 250px;
    border: 1px solid #ddd;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.card-image {
    width: 100%;
    height: 180px;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 15px;
}

.card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card h2 {
    font-size: 18px;
    margin: 10px 0;
}

.card p {
    font-size: 14px;
    line-height: 1.5;
    margin: 10px 0 20px 0;
}

.card button {
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    font-size: 14px;
}

        
    </style>

   

</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
        
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
            Refugios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="">Lista de Refugios</a></li>
            <li><a class="dropdown-item" href="">Añadir un nuevo Refugio</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Perfil
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="">Mi Informacion</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="">Cerrar Sesión</a>
        </li>
      </ul>
    </div>




 
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar refugios" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<br>
<h1>¡RefuPets!</h1>
<br><br><br><br>
<figure>
   <img src="Imagenes_animales/gatos.webp"> 
   <figcaption>
       ¡Encuentra a tu compañero ideal!
   </figcaption>
  </figure>
  <br><br>

  <h2>¿Como funciona?</h2>
  <br>
  <i>En RefuPet podras encontrar refugios para mascotas ubicados en toda la republica, Dentro de cada refugio podrás ver la amplia selección de mascotas disponibles para adoptar, ¡Será imposible no encontrar a un compañero que se adapte a tí!</i>
  <br><br><br><br><br>

  <h2>Estos amigos necesitan un hogar</h2>
  <br><br>

  <div class="cards-container">
    
    <div class="card">
        <div class="card-image">
            <img src="" alt="Mascota">
        </div>
        
        <h2>nombre</h2>
        <p>Descripción</p>
        
        <button>Ver más información</button>
    </div>

    
    <div class="card">
        <div class="card-image">
            <img src="" alt="Max">
        </div>
        
        <h2>Max</h2>
        <p>Perrito recién rescatado, 4-5 meses de edad, bastante juguetón y amigable</p>
        
        <button>Ver más información</button>
    </div>

   
    <div class="card">
        <div class="card-image">
            <img src="" alt="Güera">
        </div>
        
        <h2>güera</h2>
        <p>Perrita de 1-2 años de edad, bastante inteligente, amigable, sabe dar la pata y aprende trucos con facilidad</p>
        
        <button>Ver más información</button>
    </div>
</div>
<br><br>
<h2>Explora los refugios disponibles</h2>
<br><br>

<div class="cards-container">
    
    <div class="card">
        <div class="card-image">
            <img src="" alt="Refugio">
        </div>
        
        <h2>nombre</h2>
        <p>Descripción</p>
        
        <button>Ver más información</button>
    </div>

    
    <div class="card">
        <div class="card-image">
            <img src="" alt="Refugio la lomita">
        </div>
        
        <h2>Refugio la lomita</h2>
        <p>Ubicado en...</p>
        
        <button>Ver más información</button>
    </div>

   
    <div class="card">
        <div class="card-image">
            <img src="" alt="Refugio girasol">
        </div>
        
        <h2>Refugio girasol</h2>
        <p>Ubicado en...</p>
        
        <button>Ver más información</button>
    </div>
</div>



    





</body>
</html>