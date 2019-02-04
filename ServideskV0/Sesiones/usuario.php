<?php
include 'conexion.php';

class Usuario{


    private $ID;
    private $tipo;


    public function getTipo(){
        return $this->tipo;
    }
    
    public function getID(){
        return $this->ID;
    }
}




?>