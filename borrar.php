<?php
require_once 'conection.php';

if($_GET['id']){

	$id = $_GET['id'];
	$sql = "SELECT * FROM usuarios WHERE id = $id";
	$result = pg_query($con, $sql);
	$usuario = pg_fetch_row($result);


	if($result){
		if($usuario){
			$sql = "DELETE FROM usuarios WHERE id = $id";
			$result = pg_query($con, $sql);
			if($result) header("Location: index.php?success=true");
		}else{
			header('Location: index.php?error=true');
		}
	}else{

		header('Location: index.php?error=true');
	}
}
