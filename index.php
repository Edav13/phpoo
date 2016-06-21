<?php 
    abstract class Molde{
        abstract public function ingresarNombre($nombre);
        abstract public function obtenerNombre();
    }
    class Persona extends Molde{
        private $mensaje = "hola gente de codigoFacilito";
        private $nombre;
        public function mostrar(){
            echo $this->mensaje;
        }
        public function ingresarNombre($nombre, $username = " CF"){
            $this->nombre = $nombre . $username;
        }
        public function obtenerNombre(){
            echo $this->nombre;
        }
    }
    $obj = new Persona();
    $obj-> ingresarNombre("Carlos", " Fernadez");
    $obj->obtenerNombre();
?>