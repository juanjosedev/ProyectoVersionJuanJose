<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/menuLateral.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
 <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       Servidesk
                    </a>
                </li>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="registroTecnico.php">Ingresar personal en el sistema</a>
                </li>
            
                <li>
                    <a href="generarReportesAbiertos.php">Generador de reportes por incidentes abiertos</a>
                </li>
                <li>
                    <a href="generarReportesCerrados.php">Generador de reportes por incidentes cerrados</a>
                </li>
                <li>
                    <a href="sesiones/controladorSesion.php?cerrar_sesion=true">Cerrar Sesión</a>
                </li>
              
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
         
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src="js/menuLateral.js"></script>
</body>
</html>




   