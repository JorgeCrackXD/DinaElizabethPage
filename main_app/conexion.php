<?php
	#$mysqli = new mysqli('localhost:3306','dinajusc_mainapp','w!7}N_0yhhb&','dinajusc_mainapp');
	#if ($mysqli->connect_errno):
	#	echo "Error al conectarse con la base de datos ".$mysqli->connect_error;
	#endif;

	// we connect to example.com and port 3307
	$mysqli = mysqli_connect('localhost','dinajusc_mainapp','Aldebar4n22447$#','dinajusc_mainapp');

	if($mysqli->connect_error){
		echo $error -> $mysqli->connect_error;
	}
?>