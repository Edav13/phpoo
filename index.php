<?php
    class Vehiculo{
        public $motor = false;
        public $marca;
        public $color;

        protected function estado(){
            if ($this->motor) {
                echo "El motor esta encendido <br>";
            }else{
                echo "El motor esta apagado <br>";
            }
        }
        public function encender(){
            if ($this->motor) {
                echo "Cuidado, el motor ya esta prendido. <br>";
            }else{
                echo "El motor ahora esta encendido.<br>";
                $this->motor = true;
            }
        }
    }
    class Moto extends Vehiculo{
        public function estadoMoto(){
            self::estado();
        }
    }
    class CuatriMoto extends Moto{

    }
    /*$vehiculo = new Vehiculo();
    $vehiculo->estado();
    $vehiculo->encender();
    $vehiculo->estado();*/
    $moto = new Moto();
    $moto->estadoMoto();
    $moto1 = new CuatriMoto();
    $moto1->estadoMoto();
?>