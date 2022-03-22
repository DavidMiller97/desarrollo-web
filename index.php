<?php require_once 'conection.php'; ?>
<?php

	$sql= "SELECT * FROM usuarios";
	$result = pg_query($con, $sql);
	$usuarios = pg_fetch_all($result, PGSQL_ASSOC);
	
?>
<!DOCTYPE html>

	<head>
		<title>Formulario</title>
	</head>
	<body>
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
  
 			<button type="submit" name="submit">Enviar</button>
		</form>
		<?php if($usuarios == null):?>
			<h2>No hay registros</h2>

		<?php else:?>
			<h2>Registros</h2>
			<table>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Correo</th>
					<th>Acciones</th>
				</tr>
				<?php foreach($usuarios as $usuario): ?>
				<tr>
					<td><?php echo $usuario['id']; ?></td>
					<td><?php echo $usuario['nombre']; ?></td>
					<td><?php echo $usuario['apaterno']; ?></td>
					<td><?php echo $usuario['amaterno']; ?></td>
					<td><?php echo $usuario['correo']; ?></td>
					<td><a href="editar.php?id=<?php echo $usuario['id']; ?>">Editar</a></td>
					<td><a href="borrar.php?id=<?php echo $usuario['id'];?>">Eliminar</a></td>
				</tr>
				<?php endforeach; ?>
			</table>
			<?php endif; ?>
				
	</body>
</html>
