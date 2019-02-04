<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Tabla registro ticket</title>
<link rel="stylesheet" href="css/estiloTable.css">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<?php include("menuLateralTecnico.php")?>
<div class="container">
   <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
</div>



<?php
include "conexion.php";

if(mysqli_connect_errno()){
echo "Fallo al conectar con la base de datos";
exit();
}
;
mysqli_set_charset($conexion,"utf8");//error tildes



$consulta="SELECT * FROM incidenciastbl WHERE  order by ID_INCIDENTE DESC";

$resultados=mysqli_query($conexion,$consulta);

echo '<table class="table table-bordered table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>FECHA</th>';
echo '<th>DOCUMENTO USUARIO</th>';
echo '<th>TECNICO RESPONSABLE</th>';
echo '<th>ESTADO</th>';
echo '<th>VER TICKET</th>';
echo '</tr>';
echo '</thead>';

while($row = mysqli_fetch_array($resultados)){

echo '<tbody id="myTable">';
echo '<tr>';
echo '<td>'. $row['ID_INCIDENTE'].'</td>';
echo '<td>'.$row['FECHA_INCIDENTE'].'</td>';
echo '<td>'.$row['DOC_USUARIO'].'</td>';
echo '<td>'.$row['TEC_ASIGNADO'].'</td>';
echo '<td>'.$row['ESTADO_INCIDENCIA'].'</td>';
echo '<td> <a href="VerTicketTecnico.php?id_incidencia='.$row['ID_INCIDENTE'].'" class="alert-link">Ver ticket</a>. </td>';
echo '</tr>';
echo '</tbody>';

}
mysqli_close($conexion);
echo '</table>';
echo '<script src="js/filtracionTabla.js"></script>';
?>




</body>
</html>