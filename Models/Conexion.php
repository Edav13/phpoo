<?php namespace Models;
	class Conexion{
		private $datos = array(
			"host" => "localhost",
			"user" => "root",
			"pass" => "",
			"db" => "proyecto"
		);
		private $conexion;
		public function __construct(){
			$this->conexion = new \mysqli($this->datos['host'], $this->datos['user'], $this->datos['pass'], $this->datos['db']);
		}
		public function consultaSimple($sql){
			$this->conexion->query($sql);
		}
		public function consultaRetorno($sql){
			$consulta = $this->conexion->query($sql);
			return $consulta;
		}
	}	
?>