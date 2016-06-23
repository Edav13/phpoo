<?php 
    //require_once "api/Models/Persona.php";
    //require_once "api/controllers/PersonasController.php";
    spl_autoload_register(function($clase){
        $ruta = "api/".str_replace("\\","/",$clase).".php";
        if(is_readable($ruta)){
            require_once $ruta;
        }else{
            echo "El archivo no existe.";
        }
    });
    Models\Persona::Hola();
    echo "<br>";
    controllers\PersonasController::Hola();
    
?>