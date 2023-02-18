<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		if($_SESSION['usuario']['UserType'] == "Admin"){
			header('Location: main_app/Admin/');
		} else if ($_SESSION['usuario']['UserType'] == "User") {
			header('Location: main_app/User/index.php');
		}
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Corpus Lingüísticos D.E</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="En esta página se encuentra un acumulado de diversos Corpus basados en una diversidad de tópicos, los cuales se ponen a disposición de la comunidad científica y estudiantil que requieran de su utilización para producir material científico e innovador.">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="Icons/fonts.css">
	<script language="Javascript"> document.oncontextmenu = function(){return false} </script>
	<script>
		// Esta funcion aun no está probada, favor de verificarla antes de descomentarla para evitar errores en el programa.
    	// Esta función abre una ventana con tu propio contenido
    	function firstExample() {
    		alert("¿Desea ponerse en contacto con los investigadores o directivos de Corpus Lingüísticos D.E?\n\nRemita un correo electrónico a: contacto.ely@gmail.com");
			window.history.go(0);
      	/*var newWindow = window.open('', 'Iniciar Sesión', 'width=525, height=100');
      	newWindow.moveTo(410, 120);
      	newWindow.document.write('<p>¿Desea ponerse en contacto con los investigadores o directivos de Corpus Lingüísticos D.E?</p><p>Remita un correo electrónico a: <b>contacto.ely@gmail.com</b></p>');*/
    	}
  	</script>
</head>

<body>
	<div class="error">
		<span>Datos de ingreso no válidos, inténtalo de nuevo por favor</span>
	</div>
	<div class="container">
		<div class="main">
			<form action="main_app/login.php" method="post">
				<div class="form-group"> 
					<div class="input-group">
						<label class="sr-only" for="userlog">Usuario:</label>
						<div class="input-group-addon">
							<span class="icon-user"></span>
						</div>
						<input class="form-control" name="userlog" type="text" placeholder="Usuario" required>
					</div>	
				</div>

				<div class="form-group">
					<div class="input-group">
						<label class="sr-only" for="passlog">Contraseña:</label>
						<div class="input-group-addon">
							<span class="icon-key"></span>
						</div>
						<input class="form-control" name="passlog" type="password" placeholder="Contraseña" required>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-9 col-lg-10">
						<label class="sr-only" for="passlog">Iniciar Sesión:</label>
						<input type="submit" class="btn btn-block btn-primary" value="Iniciar Sesión" />
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
						<label class="sr-only" for="passlog">Información:</label>
						<button class="btn btn-block btn-primary" onclick="firstExample()"><span class="icon-help-with-circle"></span></button>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<p><b>¿No tiene una cuenta?</b><a href="formulario.php"> <b>Registrarse</b></a></p>
					</div>
				</div>
			</form>	
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>