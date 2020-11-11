<?php
session_start();
include ('conexion.php');
if (isset($_SESSION['usuario'])) {
    session_destroy();
    header("location:index.php");
}  else {
    echo "Operación Incorrecta";
}
?>