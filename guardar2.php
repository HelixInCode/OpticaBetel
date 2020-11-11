
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

    <title>INSCRIPCIÓN -IRM- </title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<?php
if (isset($_POST['submit'])) {
              $date= $_POST['date'];
              $nombre = $_POST['nombre'];
              $dni = $_POST['dni'];
              $telefono= $_POST['telefono'];
              $email = $_POST['email'];
              $lejos = $_POST['lejos'];
              $cerca = $_POST['cerca'];
              $odesf = $_POST['odesf'];
              $odcil = $_POST['odcil'];
              $oden = $_POST['oden'];
              $odadd = $_POST['odadd'];
              $oiesf = $_POST['oiesf'];
              $oicil = $_POST['oicil'];
              $oien = $_POST['oien'];
              $oiadd = $_POST['oiadd'];
              $doctor = $_POST['doctor'];
              $matricula = $_POST['matricula'];
              $observaciones = $_POST['observaciones'];

    $guardar=mysqli_query($conexion,"INSERT INTO registro(nombre, dni, telefono, email, odesf, odcil, oden, odadd, oiesf, oicil, oien, oiadd, doctor, matricula, observaciones, fecha, lejos, cerca) VALUES('$nombre','$dni', '$telefono', '$email','$odesf','$odcil','$oden','$odadd','$oiesf','$oicil','$oien','$oiadd','$doctor','$matricula','$observaciones', '$date', '$lejos', '$cerca')") or die(mysqli_error($conexion));
    if($_POST['checkbox'] != ""){

      if(is_array($_POST['checkbox'])){

        if($_POST['lejos']=""){
          $lejos="-";
        }
        if($_POST['cerca']=""){
          $cerca="-";
        }

        while(list($key, $value) = each($_POST['checkbox'])){
          $sql=mysql_query("INSERT INTO registro(lejos, cerca) VALUES('$lejos', '$cerca')");
        }

      }


    }

    if ($guardar) {
        echo "<div class='alert alert-success'> La ficha del paciente fue guardada correctamente <a href='home.php' class='alert-link'>Regresar</a> </div>";
    }else{
      echo "Error al guardar los datos";
    }
            }
             
         
        ?>    
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
