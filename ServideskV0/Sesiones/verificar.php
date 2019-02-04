<?php
include 'sesion.php';

$sesion = new Sesion();

$bandera = $sesion->verificarSesion();
if(!$bandera){
    header("Location: PaginaInicial.php");
}

?>