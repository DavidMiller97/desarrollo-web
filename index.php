<?php require_once 'conection.php'; ?>
<?php
	session_start();
	$sql= "SELECT * FROM usuarios";
	$result = pg_query($con, $sql);
	$usuarios = pg_fetch_all($result, PGSQL_ASSOC);
	$login = null;
	if(isset($_SESSION['valida'])) $login = $_SESSION['valida'];
	
?>
<!DOCTYPE html>

	<head>
		<title>Formulario</title>
	</head>
	<body>
		<?php if($login == true): ?>
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
			<h2><a href="logout.php">Logout</a></h2>
			<?php endif; ?>
		<?php else: ?>
			<h1><a href="login.php">Ingresar</a></h1>
		<?php endif; ?>				
	</body>
</html>
