<?php

require 'conexion.php';

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$pass = $_POST["pass"];

//lmacenar valiables recividas
$insertar = "INSERT INTO usuarios (Name, LastName, Email, User, Password,UserType) VALUES ('$nombre', '$apellidos','$correo','$usuario','$pass','User')";
//Ejecutar consulta
$resultado = mysqli_query($mysqli, $insertar);
if (!$resultado){
	echo 'Error al registrarse';
} else {
	echo '<script> 
		alert("Usuario registrado exitosamente");
		window.history.go(-2);
		</script>';
      
	//echo 'Usuario registrado exitosamente';
}
//header('Location: ../index.php');
//Cerrar conexion
mysqli_close($mysqli);

?>