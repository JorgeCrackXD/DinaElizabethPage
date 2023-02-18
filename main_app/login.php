<?php

require 'conexion.php';
session_start();

$usuarios = $mysqli->query("SELECT Name, UserType
	FROM usuarios
	WHERE User = '".$_POST['userlog']."'
	AND Password = '".$_POST['passlog']."'");

if($usuarios->num_rows == 1):
	$datos = $usuarios->fetch_assoc();
	$_SESSION['usuario'] = $datos;
	header("Location: User/index.php");
	echo json_encode(array('error' => false, 'tipo' => $datos['UserType']));
else:
	echo "<script>alert('Los datos ingresados son incorrectos.');</script>";
	
    // Redirigir de nuevo al login
    echo "<script>window.location.href = '../corpus.php';</script>";
endif;

$mysqli->close();

?>