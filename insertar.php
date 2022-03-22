<?php
include 'conection.php';
if(isset($_POST)){

	$nombre = $_POST['nombre'];
	$apaterno = $_POST['apaterno'];
	$amaterno = $_POST['amaterno'];
	$correo = $_POST['correo'];
	$pass = $_POST['pass'];

	if($nombre == '' || $apaterno == '' || $amaterno == '' || $correo == '' || $pass == ''){

		header('Location: index.php?error=true');
	}else{

		if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
			header('Location: index.php?error=true');
		}
		$sql = "INSERT INTO usuarios (nombre, apaterno, amaterno, correo, pass) VALUES ('$nombre', '$apaterno', '$amaterno', '$correo', '$pass');";
		$result = pg_query($con, $sql);

		if($result){
			header('Location: login.php?success=true');
		}else{
			header('Location: index.php?error=true');
		}
	}
}
?>
