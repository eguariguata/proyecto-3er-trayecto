<?php

try {
    
    //Creamos nuestra nueva instancia de PDO con el driver de Postgres
    $conexion = new PDO("pgsql:dbname=ceilapaz;host=localhost;user=postgres;password=root");

    //Habilitamos el modo de errores para visualizarlos
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Definimos el tipo de respuesta para todas las consultas realizadas sobre esta instancia
    $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


} catch (PDOException $e) {
    echo "Se ha detectado un error al conectar con el servidor DB: ".$e->getMessage();
}
?>  

