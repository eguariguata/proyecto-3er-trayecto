<?php

if (isset($_GET['del']) && is_numeric($_GET['del'])) {


$id = $_GET['del'];

try {
   
  $stmt = $conexion->prepare('DELETE FROM usuario WHERE idusuario = ?');
 
  
  $stmt->execute([$id]);  // question mark parameters.
  $conexion = null;
   
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

// redirecciona a la pagina inicio
header("Location: index.php?controller=users&view");
exit();
}

elseif (isset($_GET['del2'])){ 
$id = $_GET['del2'];

try {
$stmt = $conexion->prepare('DELETE FROM registro WHERE cedulaescolar = ?');
$stmt->execute([$id]);  // question mark parameters.
$stmt2 = $conexion->prepare('DELETE FROM estudiantes WHERE estcedulaescolar= ?');
$stmt2->execute([$id]);
$stmt3 = $conexion->prepare('DELETE FROM familiares WHERE famcedulaescolar= ? ');
$stmt3->execute([$id]);
$stmt4 = $conexion->prepare('DELETE FROM representantes WHERE repcedulaescolar = ?');
$stmt4->execute([$id]);
$stmt5 = $conexion->prepare('DELETE FROM documentos WHERE doccedulaescolar = ? ');
$stmt5->execute([$id]);


$conexion = null;
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
header("Location: index.php?controller=users&vest");
exit();
}

else {
	header("Location: index.php?controller=users");
}

?>