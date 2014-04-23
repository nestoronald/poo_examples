<?php 	
	class Perro 
	{	
		private $_color;	
		private $_nombre;
		private $_estomagoLleno = false;

		function __construct($nombre, $color)
		{
			$this->_nombre  = $nombre;
			$this->_color  = $color;
		}

		function __ToString(){
			return $this->nombre.''.$this->color;
		}
		public function comer(){
			$this->estomagoLleno = true;
			sleep(5);
			return $this->_hacerDigestion();
		}

		private function _hacerDigestion(){
			$retorno = null;
			if ($this->estomagoLleno) {
				$this->_estomagoLleno = false;
				$retorno = $this->hacerNecesidades();
			}
			return $retorno;
		}		

		public function recibirCariciaCabeza(){
			return $this->moverLaCola();
		}

		public function moverLaCola(){
			return "Estoy moviendo la cola!";
		}

		public function hacer_necesidades(){
			return "hago necesidades";
		}
	}
