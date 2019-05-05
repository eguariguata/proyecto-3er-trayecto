<?php
ini_set('display_errors', 1);



try {
   
$resultado = FALSE;

if(isset($_POST['reg'])){ 
$nombre = $_POST["nombres"];
$apellido = $_POST["apellidos"];
$anoescolar = $_POST["anoescolar"];
$grupo = $_POST["grupo"];
$seccion = $_POST["seccion"];
$edad = $_POST["edad"];
$cedulaescolar = $_POST["cedulaescolar"];
$fechareg = $_POST["fecharegistro"];  
$sentencia = $conexion->prepare("INSERT INTO registro(nombres, apellidos, anoescolar, grupo, seccion, edad, cedulaescolar, fecharegistro) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$resultado = $sentencia->execute([$nombre, $apellido, $anoescolar, $grupo, $seccion, $edad, $cedulaescolar, $fechareg]);

}elseif(isset($_POST['est'])){ 
$fechanac = $_POST["fechanacimiento"];
$edo = $_POST["estado"];
$municipio = $_POST["municipio"];
$parroquia = $_POST["parroquia"];
$diralumno = $_POST["direccionalumno"];
$telf1 = $_POST["telefono1"];
$seguromedico = $_POST["seguromedico"];
$seguronombre = $_POST["seguronombre"];
$procedencia = $_POST["procedencia"];
$nombreplantel = $_POST["nombreplantel"];
$enfermedades = $_POST["enfermedades"];
$discapacidad = $_POST["discapacidad"];
$trata = $_POST["tratamiento"];
$alergia = $_POST["alergia"];
$estce = $_POST["estcedulaescolar"];


$stmt = $conexion->prepare('SELECT * FROM registro where cedulaescolar = ?');
$stmt->execute([$estce]); 
$rowCount = $stmt->rowCount();
if($rowCount>0){
	
$sentencia = $conexion->prepare("INSERT INTO estudiantes(fechanacimiento, estado, municipio, parroquia, direccion, telefono1, seguromedico, seguronombre, procedencia, nombreplantel, enfermedades, discapacidad, tratamiento, alergia, estcedulaescolar) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$resultado = $sentencia->execute([$fechanac, $edo, $municipio, $parroquia, $diralumno, $telf1, $seguromedico, $seguronombre, $procedencia, $nombreplantel, $enfermedades, $discapacidad, $trata, $alergia, $estce]);
}else{
	
}



}elseif(isset($_POST['fam'])){
$repmadre = $_POST["representantemadre"];
$telcmadre = $_POST["telefonocelularmadre"];
$tellmadre = $_POST["telefonolocalmadre"];
$nombremadre = $_POST["nombremadre"];
$apellmadre = $_POST["apellmadre"];
$cimadre = $_POST["cimadre"];
$edadmadre = $_POST["edadmadre"];
$edocivilmadre = $_POST["edocivilmadre"];
$nacmadre = $_POST["nacionalidadmadre"];
$trabmadre = $_POST["trabajamadre"];
$empmadre = $_POST["empresamadre"];
$dirmadre = $_POST["direccionmadre"];

$reppadre = $_POST["representantepadre"];
$telcpadre = $_POST["telefonocelularpadre"];
$tellpadre = $_POST["telefonolocalpadre"];
$nombrepadre = $_POST["nombrepadre"];
$apellidopadre = $_POST["apellidopadre"];
$cipadre = $_POST["cipadre"];
$edadpadre = $_POST["edadpadre"];
$edocivilpadre = $_POST["edocivilpadre"];
$nacpadre = $_POST["nacionalidadpadre"];
$trabpadre = $_POST["trabajapadre"];
$emppadre = $_POST["empresapadre"];
$dirpadre = $_POST["direccionpadre"];

$retira = $_POST["retira"];
$parentescootro2 = $_POST["parentescootro2"];
$nombreotro2 = $_POST["nombreotro2"];
$apellidootro2 = $_POST["apellidootro2"];
$telefonocelularotro2 = $_POST["telefonocelularotro2"];
$ciotro2 = $_POST["ciotro2"]; 
$famce = $_POST["famcedulaescolar"];  

$stmt = $conexion->prepare('SELECT * FROM registro where cedulaescolar = ?');
$stmt->execute([$famce]); 
$rowCount = $stmt->rowCount();
if($rowCount>0){

$sentencia = $conexion->prepare("INSERT INTO familiares(representantemadre, telefonocelularmadre, telefonolocalmadre, nombremadre, apellmadre, cimadre, edadmadre, edocivilmadre, nacionalidadmadre, trabajamadre, empresamadre, direccionmadre, representantepadre, telefonocelularpadre, telefonolocalpadre, nombrepadre, apellidopadre, cipadre, edadpadre, edocivilpadre, nacionalidadpadre, trabajapadre, empresapadre, direccionpadre, retira, parentescootro2, nombreotro2, apellidootro2, telefonocelularotro2, ciotro2, famcedulaescolar) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$resultado = $sentencia->execute([$repmadre, $telcmadre, $tellmadre, $nombremadre, $apellmadre, $cimadre, $edadmadre, $edocivilmadre, $nacmadre, $trabmadre, $empmadre, $dirmadre, $reppadre, $telcpadre, $tellpadre, $nombrepadre, $apellidopadre, $cipadre, $edadpadre, $edocivilpadre, $nacpadre, $trabpadre, $emppadre, $dirpadre, $retira, $parentescootro2, $nombreotro2, $apellidootro2, $telefonocelularotro2, $ciotro2, $famce]);
}else{
	
}

}elseif(isset($_POST['doc'])){ 
$partidanac1 = $_POST["partidanac1"];
$vacunas = $_POST["vacunas"];
$boletin = $_POST["boletin"];
$fotonino = $_POST["fotonino"];
$fotorepresentante = $_POST["fotorepresentante"];
$ciotro3 = $_POST["ciotro3"];
$constaciatrab = $_POST["constaciatrab"];
$docce = $_POST["doccedulaescolar"];

$sentencia = $conexion->prepare("INSERT INTO documentos(partidanac1, vacunas, boletin, fotonino, fotorepresentante, ciotro3, constaciatrab, doccedulaescolar) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$resultado = $sentencia->execute([$partidanac1, $vacunas, $boletin, $fotonino, $fotorepresentante, $ciotro3, $constaciatrab, $docce]);

}elseif(isset($_POST['rep'])){
$potro1 = $_POST["parentescootro1"];
$telcotro1 = $_POST["telefonocelularotro1"];
$tellotro1 = $_POST["telefonolocalotro1"];
$nombrotro1 = $_POST["nombreotro1"];
$apellidootro1 = $_POST["apellidootro1"];
$ciotro1 = $_POST["ciotro1"];
$edadotro1 = $_POST["edadotro1"];
$edocivilotro1 = $_POST["edocivilotro1"];
$nacotro1 = $_POST["nacionalidadotro1"];
$trabotro1 = $_POST["trabajootro1"];
$empotro1 = $_POST["empresaotro1"];
$dirotro1 = $_POST["direccionotro1"];
$repce = $_POST["repcedulaescolar"];  
$sentencia = $conexion->prepare("INSERT INTO representantes(parentescootro1, telefonocelularotro1, telefonolocalotro1, nombreotro1, apellidootro1, ciotro1, edadotro1, edocivilotro1, nacionalidadotro1, trabajootro1, empresaotro1, direccionotro1, repcedulaescolar) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$resultado = $sentencia->execute([$potro1, $telcotro1, $tellotro1, $nombrotro1, $apellidootro1, $ciotro1, $edadotro1, $edocivilotro1, $nacotro1, $trabotro1, $empotro1, $dirotro1, $repce]);
}


if($resultado == TRUE){
	$msg = '<i class="fa fa-check"></i> <strong>Listo!</strong> Registro agregado con éxito.';
	$class_stat = 'class="alert alert-info alert-dismissible fade show"';
		
} else 
{
	$msg = '<i class="fa fa-check"></i> <strong>Oops!</strong> Algo salió mal. Cedula escolar no esta registada';
	$class_stat = 'class="alert alert-warning"';
	
}

   
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

	
?>
