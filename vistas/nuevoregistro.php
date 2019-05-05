<?php
 
//include_once "conexion.php";
$nombreusuario = $_POST["nombreusuario"];
$cedula = $_POST["cedula"];
$cargo = $_POST["cargo"];
$tipousuario = $_POST["tipousuario"];
$username = $_POST["username"];
$password = $_POST["password"];
$confpassw = $_POST["confirm_password"];

$msg = "";
$class_stat = 'class="alert alert-info"';
if(trim($password) != trim($confpassw)){
	$msg = '<i class="fa fa-exclamation-triangle"></i> <strong>Advertencia!</strong> Tus passwords no coinciden.';
	$class_stat = 'class="alert alert-warning alert-dismissible fade show"';
}else{
$password = md5($password);
	unset($confpassw);

$sentencia = $conexion->prepare("INSERT INTO usuario(nombreusuario, cedulausuario, cargo, tipousuario, username, password) VALUES (?, ?, ?, ?, ?, ?)");
$resultado = $sentencia->execute([$nombreusuario, $cedula, $cargo, $tipousuario, $username, $password]);

if($resultado == TRUE){
	$msg = '<i class="fa fa-check"></i> <strong>Bien!</strong> Usuario agregado con éxito.';
	$class_stat = 'class="alert alert-info alert-dismissible fade show"';
	//header("Location: index.php?controller=users");
	//$conexion = null;	
	//exit();	
} else 
{
	$msg = "Algo salió mal. Error de entrada.";
	$class_stat = 'class="alert alert-warning"';
	
}
}
	
?>
