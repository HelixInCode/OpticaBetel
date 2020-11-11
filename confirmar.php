<!DOCTYPE html>
<html lang="es">   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Óptica BETEL</title>


    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">

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
    
<?php $idSocio=$_REQUEST['id']; ?>






<div class="container">


<div class="panel-body">


	<div class="alert" style="margin: 50px; text-align: left;"><h3>¿Confirma que desea borrar el cliente?</h3></div>
	<!--me redirecciona a borrar-->
	<div style="margin: 50px 200px; text-align: left;"><a href="<?php echo "borrar.php?id=$idSocio"; ?>"><button class="btn btn-danger">Aceptar</button></a>
	<!--me redirecciona a cancelar y no borra-->
	<a href="home.php"><button class="btn btn-info">Cancelar</button></a></div>
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