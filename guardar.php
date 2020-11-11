
<!DOCTYPE html>
<html lang="en">
 
 <?php
session_start();
    include ("conexion.php");

    if(isset($_SESSION['usuario'])){
?>
<head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Óptica BETEL</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
   <link rel="stylesheet" type="text/css" href="tcal.css" />
    <script type="text/javascript" src="tcal.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                   
                </button>
                <a class="navbar-brand" href="#">Optica Betel</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="home.php">Busqueda</a>
                    </li>
                    <li class="page-scroll">
                        <a href="guardar.php">Nuevo</a>
                    </li>
                   
                    <li class="page-scroll">
                        <a href="listar.php">Lista</a>
                    </li>
                     <li class="page-scroll">
                        <a href="salir.php">Salir</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<section class="contact"></section>

<div class="">

<form action="guardar2.php" method="POST" class="container">

<div class="form-group">
        <div><Label>Fecha:</Label><input type="text" name="date" class="tcal" value="" /></div>
        <label>Paciente:</label><input class="form-control" type="text" name="nombre" placeholder="Ingrese nombre completo">
        <label>DNI:</label><input class="form-control" type="number" name="dni" placeholder="Ingrese dni solo con numeros">
         <label>Teléfono:</label><input class="form-control" type="number" name="telefono" placeholder="Ingrese telefono solo con numeros">
        <label>E-mail:</label><input class="form-control" type="email" name="email" placeholder="Ingrese dni solo con numeros">
        <label><input type="checkbox" id="cbox1" name="lejos" value="lejos"> Lejos</label><br>
        <input type="checkbox" id="cbox2" name="cerca" value="cerca"> <label for="cbox2">Cerca</label><br>

         <label>OD: </label><label>ESF:</label><input name="odesf" value="" type="number" step="0.25"><label>CIL:</label><input name="odcil" value="" type="number" step="0.25"><label>en:</label><input name="oden" value="" type="text" step="any"><label>ADD:</label><input name="odadd" value="" type="text" step="any"><br> <br>

        <label>OI: </label><label>ESF:</label><input name="oiesf" value="" type="number" step="0.25"><label>CIL:</label><input name="oicil" value="" type="number" step="0.25"><label>en:</label><input name="oien" value="" type="text" step="any"><label>ADD:</label><input name="oiadd" value="" type="text" step="any"><br>

        <label>Doctor/a:</label><input class="form-control" type="text" name="doctor" placeholder="Ingrese nombre de Doctor/a">
        <label>Matricula n°:</label><input class="form-control" type="number" name="matricula" placeholder="Ingrese sólo numeros">

         <label>Observaciones:</label><textarea class="form-control" type="text" name="observaciones" placeholder="Ingrese observaciones"></textarea>
        
<input type="submit" name="submit" value="Enviar">
    </div>
</div>


<script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/freelancer.min.js"></script>
  <script type="text/javascript" src="js/freelancer.js"></script>
   <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>




</body>

</html>
<?php
    }  else {
        header ("Location: index.php");
    }
?>