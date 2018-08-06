<?php 
	
	class Conectar {
		
		private $conexion;
		private $datos = array();

		public function __construct(){
			$this->conexion = new PDO("mysql:host=localhost;dbname=actividad9","root","");
		}

		public function getComentarios(){
			$datos = $this->conexion->query("SELECT * FROM comentarios;");
			while($d = $datos->fetch(PDO::FETCH_ASSOC)){
				$this->datos = $d;
			}
			return $this->datos;
		}

	}



 ?>