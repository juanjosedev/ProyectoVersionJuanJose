<?php
$db_host="localhost";
$db_nombre="servideskdb";
$db_usuario="root";
$db_pw="";
$conexion=mysqli_connect($db_host,$db_usuario,$db_pw,$db_nombre);
mysqli_set_charset($conexion, "utf8");
if(mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    #Hay que decirle que salga de php para que no se ejecuten las demás líneas
    exit();
}


?>