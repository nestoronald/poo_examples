<?php
require_once 'Persona.php';
require_once 'Perro.php';
class Index
{
    public function ejecutar()
    {
        $persona = new Persona('Micaela', 5);
        $perro = new Perro('Tito', 'blanco y negro');
        echo "Nombre de la persona: ".$persona->getNombre()."</br>";
        echo "Nombre de la mascota: ".$perro->getNombre()."</br>";
        echo "la mascota reacciona cuando su amo le toca lca cabeza </br>";
        echo $persona->tocar($perro, 'cabeza') . '<br>';
        echo $persona->darComer($perro, 'carne') . '<br>';
    }
}
$index = new Index();
$index->ejecutar();
