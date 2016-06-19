<?php  
    

    class Facebook
    {
        public $nombre;
        public $edad;
        private $pass;

        function __construct($nombre, $edad, $pass)
        {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->pass = $pass;
        }
        public function verInformacion(){
            echo "Nombre: ".$this->nombre."<br>";
            echo "Edav: ".$this->edad."<br>";
            self::cambiarPass("54321");
            echo "Password: ".$this->pass;
        }
        private function cambiarPass($pass){
            $this->pass = $pass;
        }
    }
    $facebook = new Facebook("Carlos Fernandez", 20, "1234");
    $facebook->verInformacion();

?>