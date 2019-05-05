<?php

if (isset($_GET['controller']) ) {	
	include_once('conexion.php');
	session_start();
	include_once('lib/helper.php');	
	require_once('controllers/'.$_GET['controller'].".php");
	
}else{
	require_once('vistas/login.php');		
}

?>
