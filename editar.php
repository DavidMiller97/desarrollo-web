<?php
require_once 'conection.php';

if($_GET['id']){

        $id = $_GET['id'];
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $result = pg_query($con, $sql);
        $usuario = pg_fetch_assoc($result);
}
?>
<!DOCTYPE html>

        <head>
                <title>Formulario</title>
        </head>
        <body>
		<?php if($usuario): ?>
		<h1>Formulario</h1>
                <form action="guardar.php" method="POST">

                         <label for="nombre">Nombre</label>
                         <input type="text" name="nombre" value="<?php echo $usuario['nombre'];?>">

                         <label for="apaterno">Apellido Paterno</label>
                         <input type="text" name="apaterno" value="<?php echo $usuario['apaterno'];?>">

                         <label for="amaterno">Apellido Materno</label>
                         <input type="text" name="amaterno" value="<?php echo $usuario['amaterno']; ?>">

                         <label for="correo">Email</label>
                         <input type="email" id="correo" name="correo" value="<?php echo $usuario['correo']; ?>">

			<input type="hidden" name="id" value="<?php echo $usuario['id'];?>"> 
                        <button type="submit" name="submit">Enviar</button>
                </form>
		<?php else: ?>
			<h2>No existe el usuario</h2>
		<?php endif; ?>
	</body>
</html>

