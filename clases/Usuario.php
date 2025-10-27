<?php
    error_reporting(E_ALL); //esto es para que me muestre los errores
    ini_set('display_errors', 1);

    class Usuario{
        private $conexion; //esta solucion me la dio la ia, ojo
        //método constructor
        function __construct(){
            //hola, serequiere una vez el archivo de conexion
            require_once('conexion.php');
            $this -> conexion = new Conexion();

        }
        function guardar($nombre, $password){
            $consulta = "INSERT INTO usuario (id_usuario, nombre, password, foto, fk_rol, estatus) VALUES (null, '{$nombre}', '{$password}', 'foto', 2, 1);";
            $respuesta = $this -> conexion -> query($consulta);
            return $respuesta;
        }
    }
?>