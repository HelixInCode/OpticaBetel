<?php
session_start();
include ('conexion.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
<link rel="stylesheet" href="css/font-awesome.min.css">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
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
<?php
if(isset($_POST['submit'])){

$user= mysqli_real_escape_string($conexion, $_POST['usuario']);
$pass=mysqli_real_escape_string($conexion, $_POST['clave']);
$pass=crypt($pass,"pass");

 $sql = mysqli_query($conexion,"SELECT id, usuario, clave FROM btl WHERE usuario='$user' AND clave='$pass'");
        $resultado=mysqli_num_rows($sql);//cuento el número de coincidencias
        $row = mysqli_fetch_array($sql);
        //echo "todavia no entro en el if";
        if($resultado==1) {
                $_SESSION['id'] = $row['id']; // creamos la sesion "usuario_id" y le asignamos como valor el campo usuario_id
                $_SESSION['usuario'] = $row["usuario"]; // creamos la sesion "usuario_nombre" y le asignamos como valor el campo 
                header("Location:home.php");
            }else {
                echo "usuario inexistente";
                ?>
                <div class="alerta-error">Usuario inexistente</div>                    
            </h1>
            <?php
        }
}

?>

<div class="main">
    
    <div class="container">
<center>
<div class="middle">
      <div id="login">

        <form action="" method="POST">

          <fieldset class="clearfix">

            <p ><span class="fa fa-user"></span><input type="text" name="usuario" Placeholder="Nombre de usuario" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fa fa-lock"></span><input type="password" name="clave" Placeholder="Contraseña" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            
             <div>
                              
                                <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" name="submit" value="Ingresar"></span>
                            </div>

          </fieldset>
<div class="clearfix"></div>
        </form>

        <div class="clearfix"></div>

      </div> <!-- end login -->
      <div class="logo">BETEL
          
          <div class="clearfix"></div>
      </div>
      
      </div>
</center>
    </div>

</div>



<script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/freelancer.min.js"></script>
  <script type="text/javascript" src="js/freelancer.js"></script>
   <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>