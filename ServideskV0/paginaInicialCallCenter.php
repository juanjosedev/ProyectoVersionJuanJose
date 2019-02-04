<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/profiles.css">
<!------ Include the above in your HEAD tag ---------->

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/happily-colored-snlogo/128/medium.png">
	
    <title>SERVIDESK</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.0.0-beta.3/dist/css/bootstrap-material-design.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<?php include("menuLateralCallCenter.php")?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
  		<a class="navbar-brand" href="#">SERVIDESK PLUS</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		
  		</div>
    </div>
	</nav>

<div class="container"><br>

  <div class="jumbotron p-3 text-center">
    <h1 class="display-4">Lista de técnicos</h1><hr>
  </div>

  <div class="row">

    <div class="col-md-4">
      <div class="card">
        <h5 class="card-header text-center bg-dark text-white">Cristian Mendez</h5>
         <div class="dropdown bio">
            <button class="btn bmd-btn-icon dropdown-toggle" type="button" id="bio_1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">more_vert</i>
            </button>
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="bio_1" style="width: 300px;">
                <li><a href="#">Asignar ticket</a></li>
             </div>
          </div>
        <div class="card-body">
            <div class="image_ava">
              <img src="http://31.media.tumblr.com/tumblr_lw2lhqjrel1qfmi03o9_r1_500.gif" class="img-thumbnail rounded mx-auto d-block" alt="avatar"/>
            </div>
          <h4 class="card-title text-center">Cristian Mendez</h4>
         
        </div>
      </div>
    </div>

  <div class="col-md-4">
      <div class="card">
        <h5 class="card-header text-center bg-dark text-white">Miguel Gutiérrez</h5>
         <div class="dropdown bio">
            <button class="btn bmd-btn-icon dropdown-toggle" type="button" id="bio_1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">more_vert</i>
            </button>
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="bio_1" style="width: 300px;">
                <li><a href="#">Asignar ticket</a></li>
             </div>
          </div>
        <div class="card-body">
            <div class="image_ava">
              <img src="http://31.media.tumblr.com/tumblr_lw2lhqjrel1qfmi03o9_r1_500.gif" class="img-thumbnail rounded mx-auto d-block" alt="avatar"/>
            </div>
          <h4 class="card-title text-center">Miguel Gutiérrez</h4>
         
        </div>
      </div>
    </div>

  <div class="col-md-4">
      <div class="card">
        <h5 class="card-header text-center bg-dark text-white">Kevin Ponce</h5>
         <div class="dropdown bio">
            <button class="btn bmd-btn-icon dropdown-toggle" type="button" id="bio_1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">more_vert</i>
            </button>
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="bio_1" style="width: 300px;">
                <li><a href="#">Asignar ticket</a></li>
             </div>
          </div>
        <div class="card-body">
            <div class="image_ava">
              <img src="http://31.media.tumblr.com/tumblr_lw2lhqjrel1qfmi03o9_r1_500.gif" class="img-thumbnail rounded mx-auto d-block" alt="avatar"/>
            </div>
          <h4 class="card-title text-center">Kevin Ponce</h4>
         
        </div>
      </div>
    </div>


</div><!-- Container -->

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://unpkg.com/popper.js@1.12.5/dist/umd/popper.js"></script>
	<script src="https://unpkg.com/bootstrap-material-design@4.0.0-beta.3/dist/js/bootstrap-material-design.js"></script>

</body>
</html>