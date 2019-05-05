<?php 
// conecta a la base de datos

//include_once('conexion.php');

// verifica si la variable 'edit' esta declarada en la URL, y chequea que sea valida

if (isset($_GET['perfil']) ){

// obtiene el valor de id

$id = $_GET['perfil'];


# Preparamos la consulta y la ejecutamos
/*$stmt = $conexion->prepare('SELECT * FROM registro r, documentos d, familiares f, estudiantes e, representantes rp where ? = r.cedulaescolar OR ? = d.doccedulaescolar OR ? = f.famcedulaescolar OR ? = e.estcedulaescolar OR ? = rp.repcedulaescolar');
$stmt->execute([$id, $id, $id, $id, $id]); 
$row = $stmt->fetch();*/

$stmt = $conexion->prepare('SELECT * FROM registro where cedulaescolar = ?');
$stmt->execute([$id]); 
$row = $stmt->fetch();

$stmt = $conexion->prepare('SELECT * FROM estudiantes where estcedulaescolar = ?');
$stmt->execute([$id]); 
$row2 = $stmt->fetch();

$stmt = $conexion->prepare('SELECT * FROM familiares where famcedulaescolar = ?');
$stmt->execute([$id]); 
$row3 = $stmt->fetch();

$stmt = $conexion->prepare('SELECT * FROM documentos where doccedulaescolar = ?');
$stmt->execute([$id]); 
$row4 = $stmt->fetch();

$stmt = $conexion->prepare('SELECT * FROM representantes where repcedulaescolar = ?');
$stmt->execute([$id]); 
$row5 = $stmt->fetch();

$conexion = null;

}
?>