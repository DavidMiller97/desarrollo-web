<?php

session_start();
if(isset($_SESSION) && $_SESSION['valida'] == true){

	$_SESSION['valida'] = null;
	session_unset();
	header('Location: index.php');
}
