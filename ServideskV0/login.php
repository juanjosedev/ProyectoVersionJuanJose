<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html>
  <head>
<link rel="stylesheet" href="css/login.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading"></h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Inicio de sesión</h2>
   <p>Entra con tu identificación o ID de técnico y contraseña</p>
   </div>
    <form id="Login" method=POST action='login.php'>

        <div class="form-group">


            <input type="text" name="user" class="form-control"  placeholder="ID o identificación">

        </div>

        <div class="form-group">

            <input type="password" name="pass" class="form-control"  placeholder="Contraseña">

        </div>
        <div class="forgot">
        <a href="">¿Olvidó su contraseña?</a>
</div>
        <button type="submit" name="btnIngreso" class="btn btn-primary">Login</button>

    </form>
    </div>

</div></div></div>


<?php
include 'Sesiones/controladorSesion.php';

// if(isset($_REQUEST['btnIngreso'])){
//    include "conexion.php";
// $usu = $_POST['user'];
// $pas = $_POST['pass'];


// $tecnico="";

// $consulta="SELECT ID_TECNICO, DOC_TECNICO, PERFIL_TECNICO, CONTRASENA_TECNICO  FROM tecnicotbl WHERE ID_TECNICO='$usu' OR DOC_TECNICO='$usu' AND CONTRASENA_TECNICO='$pas'";
// $resultado = mysqli_query($conexion,$consulta);

// $filas = mysqli_num_rows($resultado);

// if($row = mysqli_fetch_array($resultado)){
//   $tecnico = $row["PERFIL_TECNICO"];
//   if($tecnico=="Administrador")
//   {
//     header("location: registroTecnico.php");    
//   }
//   elseif(preg_match('/\Tecnico\b/', $tecnico)){
//     header("location: paginaInicialTecnico.php");
//   }elseif(preg_match('/\Experto\b/', $tecnico)){
//     header("location: paginaInicialTecnico.php");
//   }
//   else
//   {
//   header("location: paginaInicialCallCenter.php");
//   }
   
   
  
// }else{
//   echo"Error en la bd";
// }



// mysqli_free_result($resultado);
// mysqli_close($conexion); 
// }
?>

</body>
</html>