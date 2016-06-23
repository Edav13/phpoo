<?php 
    trait Persona1{
        public $nombre;
        public function mostrarNombre(){
            echo $this->nombre;
        }
        abstract function asignarNombre($nombre);
    }
    trait Trabajador{
        protected function mensaje(){
            echo " y Soy un trabajador.";
        }
    }

    class Persona{
        use Persona1, Trabajador;

        public function asignarNombre($nombre){
            $this->nombre = $nombre;
            $this->mostrarNombre();
            self::mensaje();
        }
    }
    $persona = new Persona();
    $persona->asignarNombre("Carlos");
    
?>