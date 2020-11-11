<?php
$HOST = "localhost";
$USER = "root";
$PASS = "";
$DB = "betel";

function conectar(){
	global $HOST, $USER, $PASS, $DB;
	$cnx = mysqli_connect($HOST, $USER, $PASS, $DB);
	if (mysqli_connect_errno()) {
		//creadorDB($HOST,$USER,$PASS);
		echo "Conexión fallida: ".mysqli_connect_error();
		exit();
	}
	return $cnx;
}

$conexion = conectar();
?>