<?php 
class Persona {
	private $_nombre;
	private $_edad;
	
	public function __construct($nombre, $apellidos){
		$this->_nombre = $nombre;		
		$this->_edad = $edad;		
	}

	public function __ToString(){
		return $this->_nombre.''.$this->_edad;
	}

	public function darCariciaPerro($perro){
		echo $perro->recibirCariciacabeza().'<br>';
	}

	public function darComerPerro($perro){
		echo $perro->comer().'<br>';
	}

}
?>
