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

    <title>Optica Betel </title>
   
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
 </div>
</div>
<div class="panel-heading"><h2 align="center">Listado de socios</h2></div>
<div class="panel-body">
<br>
<div class="container">

<div class="form" align="center">
<form action="" method="POST" name="search_form" id="search_form"><img src="img/lupa.png" width="100"><input type="text" style="width: 35%;" name="buscado" id="search" placeholder="Buscar por Nombre/DNI"></form>
</div>
</div>
<br>
<br>
<div id="resultados">
    <table class="table table-striped table-hover">
        <thead>
            <tr> 
                <th>Número<th>
                <th>Fecha</th>
                <th>Nombre</th>
                <th>DNI</th>
                <th></th>
                
                <th>Editar</th>
                <th>Borrar</th>             
            </tr>
        </thead>
        <tbody>
        <?php 
        $buscaSocios=mysqli_query($conexion,"SELECT * FROM registro") or die(mysqli_error($conexion));
        while ($resultado=mysqli_fetch_array($buscaSocios)) { ?>
            <tr>
                <td><?php echo $resultado['id'] ?> </td>
                <td><?php echo "" ?></td>
                <td><?php echo $resultado['fecha'] ?> </td>
                <td><?php echo $resultado['nombre'] ?></td>
                <td><?php echo substr($resultado['dni'], 0,5) ?></td>
                <td><?php echo "" ?></td>
                
                <?php $idSocio=$resultado['id']; ?>
                <td><a href='<?php echo "detallesSocio.php?id=$idSocio" ?>'> <button class="btn btn-info"><span class="glyphicon glyphicon-pencil" ></span></button></a></td>
                <td><a href='<?php echo "confirmar.php?id=$idSocio" ?>'><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" ></span></button></a></td>

            </tr>   
        <?php } ?>
                 
        </tbody>
    </table>
    </div>
</div>                        <form action="detallesSocio.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">
                            
                        </form>
                    </td>
                </tr>   
                

            </tbody>
        </table>
    </div>
</div>


</div>

<div class="footer">

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