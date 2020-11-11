<?php 
session_start();
include('conexion.php'); 
if(isset($_SESSION['usuario'])){
?>
<!DOCTYPE html>
<html lang="es">
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


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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


 <?php 
    $idSocio=$_REQUEST['id'];

    //antes del SELECT actualizo los datos en el caso de que el usuario esté actualizando datos
    if (isset($_POST['guardar'])) {

        $lejos=$_POST["lejos"];
        $cerca=$_POST["cerca"];
        //actualizo los datos
        mysqli_query($conexion, "UPDATE registro SET nombre='$_POST[nombre]', dni='$_POST[dni]', telefono='$_POST[telefono]', email='$_POST[email]', fecha='$_POST[fecha]', odesf='$_POST[odesf]', odcil='$_POST[odcil]', oden='$_POST[oden]', odadd='$_POST[odadd]', oiesf='$_POST[oiesf]', oicil='$_POST[oicil]', oien='$_POST[oien]', oiadd='$_POST[oiadd]', doctor='$_POST[doctor]', matricula='$_POST[matricula]', observaciones='$_POST[observaciones]', lejos='$_POST[lejos]', cerca='$_POST[cerca]' WHERE id='$idSocio'") or die("Problemas en el select:".mysqli_error($conexion));

    echo "<div class='alert alert-success'>Los datos fueron modificados correctamente</div>";

 if(isset($_POST['checkbox'])){

      if(is_array($_POST['checkbox'])){

        if($_POST['lejos']=""){
          $lejos="0";
        }
        if($_POST['cerca']=""){
          $cerca="0";
        }

        while(list($key, $value) = each($_POST['checkbox'])){
          $sql=mysql_query("INSERT INTO registro(lejos, cerca) VALUES('$lejos', '$cerca')");
        }

      }


    }

    }

    $buscoSocio=mysqli_query($conexion,"SELECT * FROM registro WHERE id='$idSocio' ") or die(mysqli_error($conexion));
    $resultado=mysqli_fetch_array($buscoSocio);

    $fecha=$resultado["fecha"];
    $nombre=$resultado["nombre"];
    $dni=$resultado["dni"];
    $telefono=$resultado["telefono"];
    $email=$resultado["email"];
    $lejos=$resultado["lejos"];
    $cerca=$resultado["cerca"];
    $id=$resultado["id"];
    $odesf=$resultado["odesf"];
    $odcil=$resultado["odcil"];
    $oden=$resultado["oden"];
    $odadd=$resultado["odadd"];
    $oiesf=$resultado["oiesf"];
    $oicil=$resultado["oicil"];
    $oien=$resultado["oien"];
    $oiadd=$resultado["oiadd"];
    $doctor=$resultado["doctor"];
    $matricula=$resultado["matricula"];
    $observaciones=$resultado["observaciones"];
    ?>

<div class="container">
        <div class="panel panel-info">
            <div class="panel-heading"><h1>Paciente <?php echo $nombre; ?> </h1></div>
            <div class="panel-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <div><Label>Fecha:</Label><input type="text" name="fecha" class="tcal" value="<?php echo $fecha; ?>" /></div>
                        <label for="">Nombre:</label>

                        <input class="form-control" value="<?php echo $nombre; ?>" type="text" name="nombre">

                    </div>

                     <label>DNI:</label><input class="form-control" type="number" value="<?php echo $dni; ?>" name="dni" >

                     <label>Teléfono:</label><input class="form-control" type="number" value="<?php echo $telefono; ?>" name="telefono" >

                    <label>E-mail:</label><input class="form-control" type="email" value="<?php echo $email; ?>" name=email" placeholder="Ingrese dni solo con numeros">

                            <input type="hidden" value="0" name="lejos">
                    <label><input type="checkbox" id="cbox1" name="lejos" value="lejos" <?php if ($lejos=="lejos") {
                            echo "checked='checked'";
                        } ?> > Lejos</label><br>

                        <input type="hidden" value="0" name="cerca">
                    <input type="checkbox" id="cbox2" name="cerca" value="cerca" <?php if ($cerca=="cerca") {
                            echo "checked='checked'";
                        } ?> > <label for="cbox2">Cerca</label><br>

                    <label>OD: </label><label>ESF:</label><input name="odesf" value="<?php echo $odesf; ?>" type="number" step="0.25">
                    <label>CIL:</label> <input name="odcil" value="<?php echo $odcil; ?>" type="number" step="0.25">
                    <label>en:</label><input name="oden" value="<?php echo $oden; ?>" type="text" >
                    <label>ADD:</label><input name="odadd" value="<?php echo $odadd; ?>" type="text" ><br> <br>

                    <label>OI: </label><label>ESF:</label><input name="oiesf" value="<?php echo $oiesf; ?>" type="number" step="0.25">
                    <label>CIL:</label><input name="oicil" value="<?php echo $oicil; ?>" type="number" step="0.25">
                    <label>en:</label><input name="oien" value="<?php echo $oien; ?>" type="text" >
                    <label>ADD:</label><input name="oiadd" value="<?php echo $oiadd; ?>" type="text" ><br>

                     <label>Doctor/a:</label><input class="form-control" type="text" name="doctor" placeholder="Ingrese nombre de Doctor/a" value="<?php echo $doctor; ?>">
                    <label>Matricula n°:</label><input class="form-control" type="number" name="matricula" placeholder="Ingrese sólo numeros" value="<?php echo $matricula; ?>">

         <label>Observaciones:</label><textarea class="form-control" type="text" name="observaciones" ><?php echo $observaciones; ?></textarea>
        

                    <button class="btn btn-info" type="submit" name="guardar" value="guardar">Guardar</button>
                </form>

            </div>
        </div>
    </div>
    
<script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/freelancer.min.js"></script>
  <script type="text/javascript" src="js/freelancer.js"></script>
   <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>




</body>
<?php
    }  else {
        header ("Location: index.php");
    }
?>