<?php

include_once 'conection.php';

$nombre = $_POST['nombre'];
$pass = $_POST['pass'];

if($nombre == '' || $pass == ''){

	header('Location: login.php?error=true');
}else{

	$sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND pass = '$pass' LIMIT 1;";
	
	$result = pg_query($con, $sql);
	
	if(!$result) header('Location: login.php?error=true');
	$usuario = pg_fetch_row($result);
	if($usuario){
		
		 session_start();
	        $_SESSION['valida'] = true;
       		 header('Location: index.php');

	}else{

		 header('Location: login.php?error=true');
	}

}
