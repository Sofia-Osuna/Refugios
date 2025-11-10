<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $fk_especie = $_POST["fk_especie"];
    $fk_refugio = $_POST["fk_refugio"];
    
    // Manejar la foto
    $foto = $_FILES["foto"]["name"];
    $tmp = $_FILES["foto"]["tmp_name"];
    
    if($foto != ""){
        $ruta = "../imagenes_animales/" . $foto;
        move_uploaded_file($tmp, $ruta);
    } else {
        $foto = "sin_foto.jpg"; // Imagen por defecto
    }

    include ('../clases/Mascota.php');
    $clase = new Mascota();
    $resultado = $clase->guardar($nombre, $descripcion, $foto, $fk_especie, $fk_refugio);

    if($resultado){
        header('location: ../Lista_mascota.php?id_refugio=' . $fk_refugio);
    }else{
        echo "Error";
    }
?>