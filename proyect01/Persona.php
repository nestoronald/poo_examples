<?php
class Persona
{
    private $_edad;
    private $_nombre;

    // metod constructor
    public function __construct($nombre, $edad)
    {
        $this->_nombre = $nombre;
        $this->_edad = $edad;
    }
    /*-- metodos setees y getteer*/
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
}
