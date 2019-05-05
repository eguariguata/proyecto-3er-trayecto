<?php

// Con esta línea mostramos los posibles errores:
	ini_set("display_errors", "on");

//include_once "conexion.php";
$nombreusuario = $_POST["nombreusuario_updated"];
$cedula = $_POST["cedula_updated"];
$cargo = $_POST["cargo_updated"];
$tipousuario = $_POST["tipousuario_updated"];
$username = $_POST["username_updated"];
$password = $_POST["password_updated"];
$idusuario = $_POST["idusuario_updated"];
$confpassw = md5($_POST["confirm_password"]);

$msg = "";
$class_stat = 'class="alert alert-info"';
if(trim($password) != trim($confpassw)){
	$msg = '<i class="fa fa-exclamation-triangle"></i> <strong>Advertencia!</strong> Tus passwords no coinciden.';
	$class_stat = 'class="alert alert-warning alert-dismissible fade show"';
}else{
//$password = md5($password);
	unset($confpassw);

$sentencia = $conexion->prepare('UPDATE usuario SET nombreusuario = ?, cedulausuario = ?, cargo = ?, tipousuario = ?, username = ?, password = ? WHERE idusuario = ?');
$resultado = $sentencia->execute([$nombreusuario, $cedula, $cargo, $tipousuario, $username, $password, $idusuario]);

if($resultado == TRUE){
	
	$msg = '<i class="fa fa-check"></i> <strong>Bien!</strong> Usuario actualizado con éxito.';
	$class_stat = 'class="alert alert-info alert-dismissible fade show"';
	//header("Location: index.php?controller=users&view");
	//exit();
	
} else 
{
	$msg = "Algo salió mal. Error de entrada.";
	$class_stat = 'class="alert alert-warning alert-dismissible fade show"';

}
}

?>
