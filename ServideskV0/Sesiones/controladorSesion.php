<?php

  include 'conexion.php';
  include 'sesion.php';

  session_start();

  $sesion = new Sesion();

  if(isset($_GET["cerrar_sesion"])){
    $sesion->cerrarSesion();
  }

  if(isset($_POST["btnIngreso"])){
  
    if ($sesion->verificarUsuario($_POST["user"],$_POST["pass"])) {
    
      $usuario = $_POST['user'];
      $consulta="SELECT * FROM tecnicotbl WHERE ID_TECNICO='$usuario'";

      $resultado = mysqli_query($conexion,$consulta);
      if($row = mysqli_fetch_array($resultado)){
        $sesion->iniciarSesion();
        $tecnico = $row["PERFIL_TECNICO"];
        
        if($tecnico=="Administrador") {
          header("location: registroTecnico.php");    
        } elseif (preg_match('/\Tecnico\b/', $tecnico)) {
          header("location: paginaInicialTecnico.php");
        } elseif (preg_match('/\Experto\b/', $tecnico)) {
          header("location: paginaInicialTecnico.php");
        } else {
          header("location: paginaInicialCallCenter.php");
        }
      } else {
        echo"Error en la bd";
      }

    }
  }
?>