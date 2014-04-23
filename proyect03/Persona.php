<?php
class Persona
{
    private $_edad;
    private $_nombre;
    private $_hermano;
    private $_misPerros = array();
    private $_misGatos = array();

    // metod constructor
    public function __construct($nombre, $edad)
    {
        $this->_nombre = $nombre;
        $this->_edad = $edad;
    }
    public function __toString(){
        return $this->_nombre;
    }
    /*-- metodos setees y getteer*/
    
    public function setHermano(Persona $hermano){
        $this->_hermano = $hermano;
    }

    public function getEdad()
    {
        return $this->_edad;
    }
    public function setEdad($edad)
    {
        $this->_edad = $edad;
    }

    public function getNombre()
    {
        return $this->_nombre;
    }

    public function setNombre($nombre)
    {
        $this->_nombre = $nombre;
    }
    /*fin methods set y get*/
    public function tocar($objeto, $lugar)
    {
        return $objeto->tocan($lugar);
    }

    public function darComer($objeto, $comida)
    {
        return $objeto->comer($comida);
    }

    public function setPerro(Perro $perro)
    {
        $this->_misPerros[] = $perro;
    }
    public function setGato(Gato $gato)
    {
        $this->_misGatos[] = $gato;
    }
}
