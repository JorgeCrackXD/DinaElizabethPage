<!DOCTYPE html>
<html lang="es">
<head><meta charset="euc-jp">
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos-form.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>Formulario</title>
</head>
<body>
	<div class="contenedor-formulario">
		<h1>REGISTRO</h1>
		<div class="wrap">
			<form action="main_app/registrar.php" class="formulario" name="formulario_registro" method="post">
				<div>
					<div class="input-group">
						<input type="text" id="nombre" name="nombre" required>
						<label class="label" for="nombre">Nombre:</label>
					</div>
					<div class="input-group">
						<input type="text" id="apellidos" name="apellidos" required>
						<label class="label" for="apellidos">Apellidos:</label>
					</div>
					<div class="input-group">
						<input type="email" id="correo" name="correo" required>
						<label class="label" for="correo">Correo:</label>
					</div>
					<div class="input-group">
						<input type="text" id="usuario" name="usuario" required>
						<label class="label" for="usuario">Usuario:</label>
					</div>
					<div class="input-group">
						<input type="password" id="pass" name="pass" required>
						<label class="label" for="pass">Contraseña:</label>
					</div>
					<div class="input-group">
						<input type="password" id="pass2" name="pass2" required>
						<label class="label" for="pass2">Repetir Contraseña:</label>
					</div>
					<div class="input-group checkbox">
						<input type="checkbox" name="terminos" id="terminos" value="true" required>
						<label for="terminos"><a href="main_app/User/Reglamento.pdf "target="_blank"><span class="icon-open-book">Terminos y Condiciones</span></a></label>
					</div>
					<input type="submit" id="btn-submit" value="Enviar">
					<p>¿Ya tienes una cuenta?<a href="index.php">Ingresa aquí</a></p>
				</div>
			</form>
		</div>
	</div>

	<script src="js/formulario.js"></script>
</body>
</html>