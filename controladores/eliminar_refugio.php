<?php
include('../clases/Refugio.php');

$id = $_GET['id'];
$resultado= new Refugio();

if($resultado->eliminar($id)){
        header('location: ../Lista_refugio.php');

} else {
    echo "Error al eliminar el refugio";
}
?>