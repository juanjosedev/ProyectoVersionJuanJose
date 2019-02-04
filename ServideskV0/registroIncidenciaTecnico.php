<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta charset="UTF-8">
<link rel="shortcut icon" href="../Documents/favicon.ico" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title>Service Desk</title>
</head>
<body>

<?php 

        include("menuLateralTecnico.php");

?>


<div class="container">
<br>
<form action="registroIncidencia.php" method="POST">
    <h1 class="text-center">Formulario de Incidencias</h1>
    <hr>
    <h3>Información del usuario</h3>
    <div class="form-group">
        <label for="txt_id_incidencia">Número de identidad del usuario:</label>
        <input name="doc_user" type="text" id="id_incidencia" class="form-control" placeholder="Cédula del usuario" method="POST">
    </div>

    <h3>Información de la incidencia</h3>
    <div class="form-group">
        <label for="mensaje">Descripción de la incidencia:</label>
        <textarea name="descripcion" id="" cols="30" rows="3" class="form-control" method="POST" value="<?php echo $des ?>"></textarea>
    </div>

    
    <div class="form-group">
        <label for="option">Tipo de incidencia:</label>
        <select name="tipos_incidencias" id="option" class="form-control" method="POST">
            <option value="0">Seleccione</option>
            <option value="Trivial">Trivial</option>
            <option value="Red">Red</option>
            <option value="Comunicacion">Comunicacion</option>
            <option value="Software">Software</option>
            <option value="Hardware">Hardware</option>
            <option value="Seguridad">Seguridad</option> 
            <option value="Capacitacion">Capacitacion</option> 
            <option value="Aplicacion">Aplicacion</option> 
             
        </select>

    </div>


                <div class="form-group">
        <label for="option">Estado:</label>
        <select name="tipos_estados" id="option" class="form-control" method="POST">
            <option value="0">Seleccione</option>
            <option value="Activo">Activo</option>
            <option value="Pendiente">Pendiente</option>
            <option value="Cerrado">Cerrado</option>
            
        </select>
    </div>
              <div class="form-group">
        <label for="option">Técnico asignado:</label>
        <select name="tecnicos" id="option" class="form-control" method="POST">
            <option value="0">Seleccione</option>
            <option value="Cristia">Cristian</option>
            <option value="Kevin">Kevin</option>
            <option value="Miguel">Miguel</option>
            
        </select>
    </div>

        <div class="form-group">
        <label for="mensaje">Pronóstico preeliminar:</label>
        <textarea name="pronostico" id="" cols="30" rows="3" class="form-control" method="POST"></textarea>
    </div>
    
    
    <h3>Resoluciones</h3>
            <div class="form-group">
        <label for="mensaje">Resolución:</label>
        <textarea name="resolucion" id="resolucion" cols="30" rows="3" class="form-control" method="POST"></textarea>
    </div>
               
    
    <div class="form-group">
        <input type="submit" name="btnRegistro" class="btn btn-primary btn-lg" value="Guardar" method="POST">
    </div>
</form>
</div>
<script src="../Documents/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



<?php


if(isset($_REQUEST['btnRegistro'])){

include "conexion.php";
$conexion=mysqli_connect($db_host,$db_usuario,$db_pw,$db_nombre);

    $DOC_USUARIO=$_POST['doc_user'];
    $FECHA_INCIDENCIA = date('Y/m/d');
    $DES_INCIDENCIA= $_POST['descripcion'];
    $TIPO_INCIDENCIA = $_POST['tipos_incidencias'];
    $ESTADO_INCIDENCIA = $_POST['tipos_estados'];
    $PRONOSTICO_PRE = $_POST['pronostico'];
    $RESOLUCION = $_POST['resolucion'];
    $TEC_ASIGNADO=$_POST['tecnicos'];

$consulta3="INSERT INTO incidenciastbl (`ID_INCIDENTE`,`DOC_USUARIO`, `FECHA_INCIDENTE`,`DES_INCIDENCIA`,`TIPO_INCIDENCIA`,`ESTADO_INCIDENCIA`,`PRONOSTICO_PRE`,`RESOLUCION`,`TEC_ASIGNADO`)VALUES 
          (NULL, '$DOC_USUARIO', '$FECHA_INCIDENCIA',' $DES_INCIDENCIA','$TIPO_INCIDENCIA','$ESTADO_INCIDENCIA','$PRONOSTICO_PRE','$RESOLUCION','$TEC_ASIGNADO')";

         $resultado3=mysqli_query($conexion, $consulta3);


         if($resultado3){
             echo "<script>alert('Incidente registrado correctamente');</script>";
    
            }else{
            echo "malo";
   
             }
mysqli_close($conexion);
}
?>

</body>
</html>