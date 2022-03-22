<html>
	<head>
		<meta charset="utf-8">
		<title>Registrate</title>
		<h1>Formulario</h1>
                <form action="insertar.php" method="POST">

                         <label for="nombre">Nombre</label>
                         <input type="text" name="nombre">

                         <label for="apaterno">Apellido Paterno</label>
                         <input type="text" name="apaterno">

                         <label for="amaterno">Apellido Materno</label>
                         <input type="text" name="amaterno">

                         <label for="correo">Email</label>
                         <input type="email" id="correo" name="correo">

                        <label for="pass">Contraseña</label>
                        <input type="text" name="pass">
  
                        <button type="submit" name="submit">Registrarse</button>
                </form>
	</head>
</html>
