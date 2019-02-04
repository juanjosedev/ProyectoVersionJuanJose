<?php

class Sesion{

    private $ID;
    

    public function __construct(){
        $this->ID = NULL;
    }

    public function verificarUsuario($usuario, $clave){
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
        $consulta="SELECT * FROM tecnicotbl WHERE (ID_TECNICO='$usuario' OR DOC_TECNICO='$usuario') AND CONTRASENA_TECNICO='$clave'";

        $resultado = mysqli_query($conexion,$consulta);
        
        $row = mysqli_fetch_array($resultado);

        $this->ID = $row['ID_TECNICO'];
        $filas = mysqli_num_rows($resultado);
        
        return $filas>0;
    }
    public function iniciarSesion(){
        session_start();
        $_SESSION["ID"] = $this->ID;
    }
    public function cerrarSesion(){
        session_start();
        session_destroy();
        header("Location: ../PaginaInicial.php");
    }
    public function verificarSesion(){
        session_start();
        return isset($_SESSION["ID"]);
    }
    public function getID(){
        return $this->ID;
    }
}

// $sesion = new Sesion();
// if($sesion->verificarUsuario(8, 123)){
//     $sesion->iniciarSesion();
//     echo $_SESSION["ID"];
// }
// session_start();
// echo isset($_SESSION["ID"]) ? "Sí": "No";

// session_destroy();

?>