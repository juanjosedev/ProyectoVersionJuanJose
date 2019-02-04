<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta charset="UTF-8">
<link rel="shortcut icon" href="../Documents/favicon.ico" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Ver ticket</title>
</head>
<body>
<?php include("menuLateralTecnico.php");?>

<?php
include "conexion.php";

if(mysqli_connect_errno()){
echo "Fallo al conectar con la base de datos";
exit();
}
;
mysqli_set_charset($conexion,"utf8");//error tildes

$consulta="SELECT * FROM incidenciastbl WHERE ID_INCIDENTE= ".$_GET['id_incidencia']."";

$resultados=mysqli_query($conexion,$consulta);



while($row = mysqli_fetch_array($resultados)){

	echo '<form action="VerTicket.php method="GET">';
	echo '<div class="container">';
	echo '<h3>Información del usuario</h3>';
echo '<div class="form-group">';
echo '<label for="txt_id_incidencia">Número de identidad del usuario:</label>';
echo ' <input name="doc_user" type="text" id="id_incidencia" class="form-control"  
value='.$row['DOC_USUARIO'].'>';
echo '</div>';


echo '<h3>Información de la incidencia</h3>';
echo '<div class="form-group">';
echo '<label for="mensaje">Descripción de la incidencia:</label>';
echo '<h4>'.$row['DES_INCIDENCIA'].'</h4>';
echo'</div>';


   echo' <div class="form-group">';
   echo'<label for="option">Tipo de incidencia:</label>';
   echo' <select name="tipos_incidencias" id="option" class="form-control" method="POST">';
  echo'<option value="Aplicacion">'.$row['TIPO_INCIDENCIA'].'</option> ';
    echo' <option value="Trivial">Trivial</option>';
         echo'   <option value="Red">Red</option>';
            echo'<option value="Comunicacion">Comunicacion</option>';
           echo' <option value="Software">Software</option>';
            echo'<option value="Hardware">Hardware</option>';
            echo'<option value="Seguridad">Seguridad</option>'; 
            echo'<option value="Capacitacion">Capacitacion</option>'; 
            echo'<option value="Aplicacion">Aplicacion</option> ';
       echo' </select>';
echo'</div>';

  echo'<div class="form-group">';
   echo'<label for="option">Estado:</label>';
  echo'<select name="tipos_estados" id="option" class="form-control" method="POST">';
      echo'<option value="0">'.$row['ESTADO_INCIDENCIA'].'</option>';
	echo' <option value="Activo">Activo</option>';
   echo'<option value="Pendiente">Pendiente</option>';
     echo'<option value="Cerrado">Cerrado</option>';
      echo'</select>';
    echo'</div>';

echo'<div class="form-group">';
     echo'<label for="option">Técnico asignado:</label>';
 echo'<select name="tecnicos" id="option" class="form-control" method="POST">';
 echo'<option value="0">'.$row['TEC_ASIGNADO'].'</option>';
      echo'<option value="Cristia">Cristian</option>';
           echo' <option value="Kevin">Kevin</option>';
       echo' <option value="Miguel">Miguel</option>';
            
 echo'</select>';
   echo' </div>';

        echo'<div class="form-group">';
    echo'<label for="mensaje">Pronóstico preeliminar:</label>';
    echo'<h5>'.$row['PRONOSTICO_PRE'].'</h5>';
   echo' </div>';
    
    
   echo' <h3>Resoluciones</h3>';
        echo'<div class="form-group">';
        echo'<label for="mensaje">Resolución:</label>';
        echo'<textarea name="resolucion" id="resolucion" cols="30" rows="3" class="form-control" method="POST"></textarea>';
    echo'</div>';
               

        echo'</div>';



echo '<script src="../Documents/jquery.js"></script>';
echo'<!-- Latest compiled and minified JavaScript -->';
echo'<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>';


echo '</form>';




}
mysqli_close($conexion);

?>


</body>
</html>