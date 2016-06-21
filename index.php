<?php  
    class Pagina{
        public $nombre = "Codigo Facilito";
        public static $url = "www.codigofacilito.com";

        public function bienvenida(){
            echo "Bienvendios a <b>".$this->nombre."</b> la pagina es <b>".self::$url."</b>";
        }
        public function bienvenida2(){
            echo "<br>Bienvenidos ".self::$url;
        }
    }
    class Web extends Pagina{

    }
    $pagina = new Pagina();
    $pagina->bienvenida();
    Web::bienvenida2();
?>