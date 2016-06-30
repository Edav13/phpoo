<?php namespace Models; 

	class Seccion
	{
		private $id;
		private $nombre;
		private $conexion;
		
		function __construct(argument)
		{
			$this->conexion = new Conexion();
		}
		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		public function get($atributo){
			return $this->atributo;
		}
		public function listar(){
			$sql ="SELECT * FROM secciones";
			$datos = $this->conexion->consultaRetorno($sql);
			return $datos;
		}
		public function add(){
			$sql = "INSERT INTO secciones (ID, NOMBRE) VALUES (null, '{$this->nombre}')";
			$this->conexion->consultaSimple($sql);
		}
		public function delete(){
			$sql = "DELETE FROM secciones WHERE ID = '{$this->id}'";
			$this->conexion->consultaRetorno($sql);
		}
		public function edit(){
			$sql = "UPDATE FROM secciones SET NOMBRE = '{$this->nombre}' WHERE ID = '{$this->id}'";
			$this->conexion->consultaSimple($sql);
		}
		public function view(){
			$sql = "SELECT FROM secciones WHERE ID = '{$this->id}'";
			$datos = $this->conexion->consultaRetorno($sql);
			$row = mysql_fetch_assoc($datos);
			return $row;
		}
	}
?>