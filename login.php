<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario</title>
	</head>
	<body>
		<h1>Login</h1>
		<form action="ingresar.php" method="POST">
			<label for="nombre">Nombre:</label>
			<input type="text" placeholder="Nombre..." name="nombre"/>
			<br>
			<label for="pass">Contraseña:</label>
			<input type="password" name="pass" placeholder="Contraseña..." />
			<button type="submit" name="enviar">Ingresar</button>
		</form>
		<h2><a href="registrar.php">No tienes cuenta registrate!</a></h2>
	</body>
</html>
