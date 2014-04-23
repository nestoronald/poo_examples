<?php 
	class Escuela {
		private $_nombre;
		private $alumnos = array();		

		public function __construct($nombre){
			$this->_nombre = $nombre;
		}
		public function addAlumnos(Persona $persona){
			$this->_alumnos[] = $persona;
		}

		public function __toString(){
			$retorno = '';

			foreach ($this->_alumnos as $alumno) {
				$retorno .=$alumno.', ';
			}
			return $retorno;
		}
	}