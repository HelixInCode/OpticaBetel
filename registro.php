<!DOCTYPE html>
<html lang="en">
 <?php include('conexion.php') ?>
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
                <a class="navbar-brand" href="#page-top">Optica Betel</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<section class="contact"></section>
<?php
if (isset($_POST['submit'])) {

  $usuario_nombre = mysqli_real_escape_string($conexion,$_POST['usuario_nombre']);
  $usuario_clave = mysqli_real_escape_string($conexion,$_POST['usuario_clave']);
  $usuario_email = mysqli_real_escape_string($conexion,$_POST['usuario_email']);

  

         //comprueba que el usuario no esté repetido
  $sql = mysqli_query($conexion,"SELECT email FROM btl WHERE email='".$usuario_email."'");
  if (mysqli_num_rows($sql)>0) {
    ?>
    <div>El correo de usuario elegido ya existe</div>
    <?php

  } else {
      $usuario_clave = crypt($usuario_clave,"pass");
      $reg = mysqli_query($conexion,"INSERT INTO btl (usuario,clave,email) VALUES ('$usuario_nombre','$usuario_clave','$usuario_email')") or die(mysqli_error($conexion));
      if ($reg) {       
        ?>
        <div>Usuario creado correctamente!!</div>   
     
<?php       
      } else {
?>
  <div>Error al guardar los datos</div>
<?php
      } 
    }
    
  } 

?>

<div class="principal">
    <h2 align="center">Creación de Usuario</h2>
</div>
<br>
<br>


<div class="" align="center">

<form action="" method="POST" class="container">

<div class="form-group">
        <label style="text-align: left;">Nombre de Usuario:</label><input class="form-control" style="width: 50%;" type="text" name="usuario_nombre" placeholder="Ingrese nombre de usuario" required>
       
        <label style="text-align: left;">E-mail:</label><input class="form-control" style="width: 50%;" type="email" name="usuario_email" placeholder="Ingrese email" required>

        <label style="text-align: left;">Contraseña:</label><input class="form-control" style="width: 50%;" type="password" name="usuario_clave" placeholder="Ingrese contraseña" required>
      <br>
      <br>
        
<input type="submit" name="submit" class="btn btn-primary" value="Enviar">
    </div>
</div>




</body>

</html>


