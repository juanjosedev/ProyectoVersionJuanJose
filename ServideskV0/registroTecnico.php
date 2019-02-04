
<?php include 'Sesiones/verificar.php';?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/menuCallCenter.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Service Desk</title>
</head>

<body>
<div class="container" >

<?php include("menuLateralAdministrador.php")


?>

        
       <form method="POST">
            <h1 class="text-center">Formulario de registro</h1>
            <hr>
            <h3>Información del nuevo personal</h3>
            <div class="form-group">
                <label for="cedula">*Cédula:</label>
                <input name="txt_cedula" type="text"  class="form-control" placeholder="Cédula" method="POST">
            </div>
            <div class="form-group">
                <label for="nombre">*Nombre completo:</label>
                <input name="txt_nombre" type="text" class="form-control" placeholder="Nombre" method="POST">
            </div>
            <div class="form-group">
        <label for="option">Perfil del trabajador:</label>
        <select name="tipos_tecnicos" id="option" class="form-control" method="POST">
            <option value="0">Seleccione</option>
            <option value="CallCenter">Call center</option>
            <option value="Tecnico en redes">Técnico en redes</option>
            <option value="Tecnico en Comunicacion">Técnico en comunicacion</option>
            <option value="Tecnico en Software">Técnico en software</option>
            <option value="Tecnico en Hardware">Técnico en hardware</option>
            <option value="Tecnico en Seguridad">Técnico en seguridad</option> 
            <option value="Experto en Capacitacion">Experto en capacitacion</option> 
            <option value="Tecnico en Aplicacion">Técnico en aplicación</option> 
             
        </select>

    </div>




            <div class="form-group">
                <label for="correo">*Correo:</label>
                <input name="txt_correo" type="email" class="form-control" placeholder="Correo" method="POST">
            </div>
            <div class="form-group">
                <label for="telefono">*Número telefónico:</label>
                <input name="txt_telefono" type="text"  class="form-control" placeholder="Número telefónico" method="POST">
            </div>
            <div class="form-group">
                <label for="telefono">*Contraseña por defecto:</label>
                <input name="txt_password" type="password"  class="form-control" placeholder="Password" method="POST">
            </div>
            

            <div class="form-group">
                <input type="submit" name="btnGuardar" class="btn btn-primary btn-lg" value="Guardar">
            </div>
        </form>
    </div>
    <script src="jquery.js"></script>
        <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php

if(isset($_REQUEST['btnGuardar'])){
    include "conexion.php";
    $conexion=mysqli_connect($db_host,$db_usuario,$db_pw,$db_nombre);
    $DOC_TECNICO=$_POST['txt_cedula'];
    $NOMBRE_TECNICO=$_POST['txt_nombre'];
    $PERFIL_TECNICO=$_POST['tipos_tecnicos'];
    $CORREO_TECNICO=$_POST['txt_correo'];
    $TELEFONO_TECNICO=$_POST['txt_telefono'];
    $CONTRASENA_TECNICO=$_POST['txt_password'];

    $consulta="INSERT INTO tecnicotbl (`ID_TECNICO`,`DOC_TECNICO`, `NOMBRE_TECNICO`,`PERFIL_TECNICO`,`CORREO_TECNICO`,`TELEFONO_TECNICO`,`CONTRASENA_TECNICO`)VALUES 
          (NULL, '$DOC_TECNICO', '$NOMBRE_TECNICO',' $PERFIL_TECNICO','$CORREO_TECNICO','$TELEFONO_TECNICO','$CONTRASENA_TECNICO')";

    $resultado=mysqli_query($conexion,$consulta);
    if($resultado){
       
    echo '<div class="alert alert-success">';
    echo '<Strong>Registro completo!</Strong>Se ha registrado un usuario correctamente.';
    echo '</div>';

}else{
     echo '<div class="alert alert-danger">';
    echo '<Strong>Ya existe el usuario!</Strong> No se ha creado el usuario..';
    echo '</div>';
}
   
    mysqli_close($conexion);
}

?>
    
</body>
</html>
