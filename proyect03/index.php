<?php
require_once 'Persona.php';
require_once 'Perro.php';
require_once 'Gato.php';
require_once 'Escuela.php';



class Index
{
    public function ejecutar()
    { 
        /*Micaela tiene un perro*/
        $persona = new Persona('Micaela', 5);
        $perro = new Perro('Tito', 'blanco y negro');

        $persona->setPerro($perro);

        /*Martina, dueña del mismo perro...*/
        $persona1 = new Persona('Martina',3);
        $persona1->setPerro($perro);

        /*... y hermana de micaela*/
        $persona->setHermano($persona1);

        /*Marcos es dueño de un gato*/
        $persona2 = new Persona('Marcos',6);
        $persona2->setGato(new Gato());

        /*Escuela dos corazones*/
        $escuela = new Escuela('Dos Corazones');

        /*Micaela va junto con 5 niños mas*/
        $escuela->addAlumnos($persona);
        $escuela->addAlumnos($persona1);
        $escuela->addAlumnos($persona2);
        $escuela->addAlumnos(new Persona('Julio',5));
        $escuela->addAlumnos(new Persona('Martin',4));
        $escuela->addAlumnos(new Persona('Carla',4));
        echo "Nombre de la persona: ".$persona->getNombre()."</br>";
        echo "Nombre de la mascota: ".$perro->getNombre()."</br>";
        echo "Alumnos que asisten ala escuela : ".$escuela->__toString()."</br>";
        echo "la mascota reacciona cuando su amo le toca lca cabeza </br>";
        echo $persona->tocar($perro, 'cabeza') . '<br>';
        echo $persona->darComer($perro, 'carne') . '<br>';
    }
}
$index = new Index();
$index->ejecutar();
