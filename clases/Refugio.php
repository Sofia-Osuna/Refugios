<?php
    error_reporting(E_ALL); //esto es para que me muestre los errores
    ini_set('display_errors', 1);

    class Refugio{
        private $conexion; //esta solucion me la dio la ia, ojo
        //método constructor
        function __construct(){
            //hola, serequiere una vez el archivo de conexion
            require_once('conexion.php');
            $this -> conexion = new Conexion();

        }

        function guardar($nombre,  $descripcion, $estado, $municipio, $nombre_calle,  $numero_exterior, $numero_interior, $cp){
            $consulta = "INSERT INTO estado (id_estado, nombre, fk_pais, estatus) VALUES (null, '{$estado}', 1, 1);";
            $respuesta = $this -> conexion -> query($consulta);        
            $id1 = mysqli_insert_id($this->conexion);
            
            $consulta = "INSERT INTO municipio (id_municipio, nombre, fk_estado, estatus) VALUES (null, '{$municipio}', '{$id1}', 1);";
            $respuesta = $this -> conexion -> query($consulta);        
            $id2 = mysqli_insert_id($this->conexion);

            $consulta = "INSERT INTO direccion (id_direccion, nombre_calle, numero_exterior, numero_interior, cp, fk_municipio) VALUES (null, '{$nombre_calle}', '{$numero_exterior}', '{$numero_interior}', '{$cp}', '{$id2}');";
            $respuesta = $this -> conexion -> query($consulta);
            $id3 = mysqli_insert_id($this->conexion);

            $consulta = "INSERT INTO refugio (id_refugio, nombre, descripcion, foto, estatus) VALUES (null, '{$nombre}', '{$descripcion}', 'pendiente', 1);";
            $respuesta = $this -> conexion -> query($consulta);
            $id4 = mysqli_insert_id($this->conexion);

            $consulta = "INSERT INTO refugio_direcciones (id_refugio_direcciones, fk_refugio, fk_direccion, estatus) VALUES (null, '{$id4}','{$id3}', 1);";
            $respuesta = $this -> conexion -> query($consulta);
            
          
            return $respuesta;
        }
    }
?>