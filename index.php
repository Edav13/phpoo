<?php  
    
    class Persona{
        public $nombre = array();
        public $apellido = array();
        
        public function guardar($nombre, $apellido){
            $this->nombre[] = $nombre;
            $this->apellido[] = $apellido;
        }
        public function mostrar(){
            for ($i=0; $i < count($this->nombre); $i++) { 
                self::formato($this->nombre[$i], $this->apellido[$i]);
            }
        }
        public function formato($nombre, $apellido){
            echo "Nombre: ". $nombre." | Apellido: ".$apellido."<br>";
        }
    }
    $persona = new Persona();
    $persona->guardar("Carlos", "Fernandez");
    $persona->guardar("Uriel", "Hernandez");
    $persona->guardar("Edwin", "David");
    $persona->mostrar();
?>