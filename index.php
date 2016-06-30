<?php
    require_once "Config/Autoload.php";
    Config\Autoload::run();
    $est = new Models\Estudiante();
    $est->set('id', 1);
    $datos = $est->view();
    echo $datos['NOMBRE'];
?>