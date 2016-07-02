<?php namespace Models;
	class Estudiante{
		private $id;
		private $nombre;
		private $edad;
		private $promedio;
		private $imagen;
		private $id_seccion;
		private $fecha;
		private $conexion;

		public function __construct(){
			$this->conexion = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		public function get($atributo){
			return $this->atributo;
		}
		public function listar(){
			$sql = "SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.ID_SECCION = t2.ID";
			$datos = $this->conexion->consultaRetorno($sql);
		}

		public function add(){
			$sql = "INSERT INTO estudiantes(ID, NOMBRE, EDAD, PROMEDIO, IMAGEN, ID_SECCION, FECHA) VALUES (null, '{$this->nombre}', '{$this->edad}', '{$this->promedio}', '{$this->imagen}', '{$this->id_seccion}', NOW())";
			$this->conexion->consultaSimple($sql);
		}
		public function delete(){
			$sql = "DELETE FROM estudiantes WHERE ID = '{$this->id}'";
			$this->conexion->concultaSimple($sql);
		}
		public function edit(){
			$sql = "UPDATE estudiantes SET NOMBRE = '{$this->nombre}', EDAD = '{$this->edad}', PROMEDIO = '{$this->promedio}', ID_SECCION = '{$this->id_seccion}' WHERE ID = '{$this->id}'";
			$this->conexion->consultaSimple($sql);
		}
		public function view(){
			$sql = "SELECT t1.*, t2.NOMBRE as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.ID_SECCION = t2.ID WHERE t1.ID = '{$this->id}'";
			$datos = $this->conexion->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}
	}
	
?>