<?php 
// conecta a la base de datos

//include_once('conexion.php');

// verifica si la variable 'edit' esta declarada en la URL, y chequea que sea valida

if (isset($_GET['edit']) && is_numeric($_GET['edit'])) {

// obtiene el valor de id
$id = $_GET['edit'];

# Preparamos la consulta y la ejecutamos
$stmt = $conexion->prepare('SELECT * FROM usuario where idusuario = ?');
$stmt->execute([$id]); 
$row = $stmt->fetch();

$conexion = null;

}
else {

// si la id no esta declarada 
$id = $_GET["edit2"];

# Preparamos la consulta y la ejecutamos
$stmt = $conexion->prepare('SELECT * FROM registro where idregistro = ?');
$stmt->execute([$id]); 
$row = $stmt->fetch();

$conexion = null;
}

?>