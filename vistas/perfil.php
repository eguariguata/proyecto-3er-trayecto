<?php include_once('perfil_pdo.php');?>
<!DOCTYPE html>
<html lang="es-VE">
<head>
    <meta charset="utf-8" />
    <title>SIGANE | Sistema de Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Planilla de Registro Usuario" name="description" />
    <meta content="sigane" name="author" />
    <link rel="shortcut icon" href="img/registro.ico">
    <!-- css -->
    <link href="css/app.min.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

    <body>

        <!-- Begin page -->
        <div class="wrapper">

            <!-- Left Sidebar Start -->
            <?php include('sidebar.php');?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                    <?php include('topbar.php');?>
                    <!-- end Topbar -->
                    
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        
                                    </div>
                                    <h4 class="page-title">Perfil del estudiante</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Profile -->
                                <div class="card bg-primary">
                                    <div class="card-body profile-user-box">

                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="media">
                                                    <span class="float-left m-2 mr-4"><img src="img/users/nino2.png" style="height: 80px;" alt="" class="rounded-circle img-thumbnail"></span>
                                                    <div class="media-body">

                                                        <h4 class="mt-1 mb-1 text-white"><?php echo $row['nombres'];?> <?php echo $row['apellidos'];?></h4>
                                                        <p class="font-13 text-white-50"> <?php echo $row['seccion'];?> <span>/</span> <?php echo $row['grupo'];?> <span>/</span> <?php echo $row['anoescolar'];?> </p>

                                                    </div> <!-- end media-body-->
                                                </div>
                                            </div> <!-- end col-->

                                            <div class="col-sm-4">
                                                <div class="text-center mt-sm-0 mt-3 text-sm-right">
                                                    <a href="index.php?controller=users&vest">
                                                        <button type="button" class="btn btn-success btn-rounded">
                                                        <i class="mdi mdi-account-settings-variant mr-1"></i> Regresar
                                                    </button></a>
                                                </div>
                                            </div> <!-- end col-->
                                        </div> <!-- end row -->
                                    </div> <!-- end card-body/ profile-user-box-->
                                </div><!--end profile/ card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-5">

                                <!-- caja cedula-->
                                <div class="card text-white bg-info">
                                    <div class="card-body">
                                        <div class="toll-free-box text-center">
                                            <h5><i class=" mdi mdi-account-card-details"></i> CEDULA ESCOLAR :</h5>
                                            <h3><span class="badge badge-primary"><?php echo $row['cedulaescolar'];?></span></h3>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                                <!-- fin caja cedula-->

                                <!-- Personal-Information -->
                                <div class="card">
                                    <div class="card-body">
                                            <div class="toll-free-box text-left">
                                                <h3><span class="badge badge-success"class="header-title mt-0 mb-3 text-dark">Datos del Alumno</span></h3>
                                            </div>
                                       
                                        <hr/>

                                        <div class="text-left">
                                            <p class="text-muted"><strong>Fecha de registro :</strong> <span class="ml-2"><?php echo $row['fecharegistro'];?></span></p>

                                            <p class="text-muted"><strong>Edad :</strong>
                                            <span class="ml-2"><?php echo $row['edad'];?></span></p>

                                            <p class="text-muted"><strong>Nombres :</strong> <span class="ml-2"><?php echo $row['nombres'];?></span></p>

                                            <p class="text-muted"><strong>Apellidos :</strong> <span class="ml-2"><?php echo $row['apellidos'];?></span></p>

                                            <p class="text-muted"><strong>Año Escolar :</strong> <span class="ml-2"><?php echo $row['anoescolar'];?></span></p>

                                            <p class="text-muted"><strong>Grupo :</strong> <span class="ml-2"><?php echo $row['grupo'];?></span></p>

                                            <p class="text-muted"><strong>Sección :</strong> <span class="ml-2"><?php echo $row['seccion'];?></span></p>

                                            <p class="text-muted"><strong>Lugar de nacimiento :</strong><span class="ml-2"><?php echo $row2['estado'];?><?php echo $row2['municipio'];?><?php echo $row2['parroquia'];?></span></p>

                                            <p class="text-muted"><strong>Habitación :</strong><span class="ml-2"><?php echo $row2['direccion'];?></span></p>

                                            <p class="text-muted"><strong>Teléfono de Habitación:</strong><span class="ml-2"><?php echo $row2['telefono1'];?></span></p>

                                            <p class="text-muted"><strong>Posee seguro médico :</strong><span class="ml-2"><?php echo $row2['seguromedico'];?></span></p>

                                            <p class="text-muted"><strong>Aseguradora :</strong><span class="ml-2"><?php echo $row2['seguronombre'];?></span></p>

                                            <p class="text-muted"><strong>Procedencia :</strong><span class="ml-2"><?php echo $row2['procedencia'];?></span></p>

                                            <p class="text-muted"><strong>Nombre del plantel :</strong><span class="ml-2"><?php echo $row2['nombreplantel'];?></span></p>

                                            <p class="text-muted"><strong>Fecha de nacimiento :</strong> <span class="ml-2"><?php echo $row2['fechanacimiento'];?></span></p>
                                        </div>
                                    </div>
                                </div>

                                 <div class="card">
                                    <div class="card-body">
                                        <div class="toll-free-box text-left">
                                            <h3><span class="badge badge-success"class="header-title mt-0 mb-3 text-dark">Historial Clinico</span></h3>
                                        </div>
                                       
                                        <hr/>

                                        <div class="text-left">
                                            <p class="text-muted"><strong>Enfermedades :</strong> <span class="ml-2"><?php echo $row2['enfermedades'];?></span></p>

                                            <p class="text-muted"><strong>Discapacidad :</strong> <span class="ml-2"><?php echo $row2['discapacidad'];?></span></p>

                                            <p class="text-muted"><strong>Tratamiento :</strong> <span class="ml-2"><?php echo $row2['tratamiento'];?></span></p>

                                            <p class="text-muted"><strong>Alergias :</strong> <span class="ml-2"><?php echo $row2['alergia'];?></span></p>
                                        </div>
                                    </div>
                                </div>

                                 <div class="card">
                                    <div class="card-body">
                                        <div class="toll-free-box text-left">
                                            <h3><span class="badge badge-success"class="header-title mt-0 mb-3 text-dark">Documentos Consignados</span></h3>
                                        </div>
                                       
                                        <hr/>

                                        <div class="text-left">
                                            <p class="text-muted"><strong>Partida de Nacimiento :</strong> <span class="ml-2"><?php echo $row4['partidanac1'];?></span></p>

                                            <p class="text-muted"><strong>Certificado de Vacunas :</strong> <span class="ml-2"><?php echo $row4['vacunas'];?></span></p>

                                            <p class="text-muted"><strong>Boletin Informativo :</strong> <span class="ml-2"><?php echo $row4['boletin'];?></span></p>

                                            <p class="text-muted"><strong>Foto del Niño :</strong>
                                            <span class="ml-2"><?php echo $row4['fotonino'];?></span></p>

                                            <p class="text-muted"><strong>Foto del Representante :</strong>
                                            <span class="ml-2"><?php echo $row4['fotorepresentante'];?></span></p>

                                            <p class="text-muted"><strong>Cedula del Representante :</strong>
                                            <span class="ml-2"><?php echo $row4['ciotro3'];?></span></p>

                                            <p class="text-muted"><strong>Constancia de Trabajo :</strong>
                                            <span class="ml-2"><?php echo $row4['constaciatrab'];?></span></p>
                                        </div>
                                    </div>
                                </div>


                                <!-- Personal-Information -->


                            </div> <!-- end col-->

                            <div class="col-md-7">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="toll-free-box text-left">
                                            <h3><span class="badge badge-success"class="header-title mt-0 mb-3 text-dark">Datos de la Madre</span></h3>
                                        </div>
                                        <hr/>

                                        <div class="text-left">
                                            <p class="text-muted"><strong>Representante :</strong> <span class="ml-2"><?php echo $row3['representantemadre'];?></span></p>

                                            <p class="text-muted"><strong>Nombres :</strong> <span class="ml-2"><?php echo $row3['nombremadre'];?></span></p>

                                            <p class="text-muted"><strong>Apellidos :</strong> <span class="ml-2"><?php echo $row3['apellmadre'];?></span></p>

                                            <p class="text-muted"><strong>Cédula :</strong> <span class="ml-2"><?php echo $row3['cimadre'];?></span></p>

                                            <p class="text-muted"><strong>Edad :</strong> <span class="ml-2"><?php echo $row3['edadmadre'];?></span></p>

                                            <p class="text-muted"><strong>Telefono local :</strong> <span class="ml-2"><?php echo $row3['telefonolocalmadre'];?></span></p>

                                            <p class="text-muted"><strong>Telefono celular :</strong>
                                            <span class="ml-2"><?php echo $row3['telefonocelularmadre'];?></span></p>

                                            <p class="text-muted"><strong>Estado civil :</strong><span class="ml-2"><?php echo $row3['edocivilmadre'];?></span></p>

                                            <p class="text-muted"><strong>Nacionalidad :</strong><span class="ml-2"><?php echo $row3['nacionalidadmadre'];?></span></p>

                                            <p class="text-muted"><strong>Trabaja? :</strong><span class="ml-2"><?php echo $row3['trabajamadre'];?></span></p>

                                            <p class="text-muted"><strong>Lugar de Trabajo :</strong><span class="ml-2"><?php echo $row3['empresamadre'];?></span></p>

                                            <p class="text-muted"><strong>Dirección :</strong><span class="ml-2"><?php echo $row3['direccionmadre'];?></span></p>

                                        </div>       
                                    </div>
                                </div>
                                
                            <div class="card">
                                    <div class="card-body">
                                        <div class="toll-free-box text-left">
                                            <h3><span class="badge badge-success"class="header-title mt-0 mb-3 text-dark">Datos del Padre</span></h3>
                                        </div>
                                        <hr/>

                                        <div class="text-left">
                                            <p class="text-muted"><strong>Representante :</strong> <span class="ml-2"><?php echo $row3['representantepadre'];?></span></p>

                                            <p class="text-muted"><strong>Nombres :</strong> <span class="ml-2"><?php echo $row3['nombrepadre'];?></span></p>

                                            <p class="text-muted"><strong>Apellidos :</strong> <span class="ml-2"><?php echo $row3['apellidopadre'];?></span></p>

                                            <p class="text-muted"><strong>Cédula :</strong> <span class="ml-2"><?php echo $row3['cipadre'];?></span></p>

                                            <p class="text-muted"><strong>Edad :</strong> <span class="ml-2"><?php echo $row3['edadpadre'];?></span></p>

                                            <p class="text-muted"><strong>Telefono local :</strong> <span class="ml-2"><?php echo $row3['telefonolocalpadre'];?></span></p>

                                            <p class="text-muted"><strong>Telefono celular :</strong>
                                            <span class="ml-2"><?php echo $row3['telefonocelularmadre'];?></span></p>

                                            <p class="text-muted"><strong>Estado civil :</strong><span class="ml-2"><?php echo $row3['edocivilpadre'];?></span></p>

                                            <p class="text-muted"><strong>Nacionalidad :</strong><span class="ml-2"><?php echo $row3['nacionalidadpadre'];?></span></p>

                                            <p class="text-muted"><strong>Trabaja? :</strong><span class="ml-2"><?php echo $row3['trabajapadre'];?></span></p>

                                            <p class="text-muted"><strong>Lugar de Trabajo :</strong><span class="ml-2"><?php echo $row3['empresapadre'];?></span></p>

                                            <p class="text-muted"><strong>Dirección :</strong><span class="ml-2"><?php echo $row3['direccionpadre'];?></span></p>

                                        </div>       
                                    </div>
                                </div>
                                


                                <div class="card">
                                    <div class="card-body">
                                        <div class="toll-free-box text-left">
                                            <h3><span class="badge badge-success"class="header-title mt-0 mb-3 text-dark">Datos del Representante Legal</span></h3>
                                        </div>

                                        <hr/>

                                        <div class="text-left">
                                            <p class="text-muted"><strong>Parentesco :</strong> <span class="ml-2"><?php echo $row5['parentescootro1'];?></span></p>

                                            <p class="text-muted"><strong>Nombres :</strong> <span class="ml-2"><?php echo $row5['nombreotro1'];?></span></p>

                                            <p class="text-muted"><strong>Apellidos :</strong> <span class="ml-2"><?php echo $row5['apellidootro1'];?></span></p>

                                            <p class="text-muted"><strong>Cédula :</strong> <span class="ml-2"><?php echo $row5['ciotro1'];?></span></p>

                                            <p class="text-muted"><strong>Edad :</strong> <span class="ml-2"><?php echo $row5['edadotro1'];?></span></p>

                                            <p class="text-muted"><strong>Telefono local :</strong> <span class="ml-2"><?php echo $row5['telefonolocalotro1'];?></span></p>

                                            <p class="text-muted"><strong>Telefono celular :</strong>
                                            <span class="ml-2"><?php echo $row5['telefonocelularotro1'];?></span></p>

                                            <p class="text-muted"><strong>Estado civil :</strong><span class="ml-2"><?php echo $row5['edocivilotro1'];?></span></p>

                                            <p class="text-muted"><strong>Nacionalidad :</strong><span class="ml-2"><?php echo $row5['nacionalidadotro1'];?></span></p>

                                            <p class="text-muted"><strong>Trabaja? :</strong><span class="ml-2"><?php echo $row5['trabajaotro1'];?></span></p>

                                            <p class="text-muted"><strong>Lugar de Trabajo :</strong><span class="ml-2"><?php echo $row5['empresaotro1'];?></span></p>

                                            <p class="text-muted"><strong>Dirección :</strong><span class="ml-2"><?php echo $row5['direccionotro1'];?></span></p>

                                        </div>
                                    </div> 
                                </div> 


                                 <div class="card">
                                    <div class="card-body">
                                        <div class="toll-free-box text-left">
                                            <h3><span class="badge badge-success"class="header-title mt-0 mb-3 text-dark">Persona Autorizada a Ratirar</span></h3>
                                        </div>
                                        <hr/>

                                        <div class="text-left">
                                            <p class="text-muted"><strong>Retira :</strong> <span class="ml-2"><?php echo $row3['retira'];?></span></p>

                                            <p class="text-muted"><strong>Parentesco :</strong> <span class="ml-2"><?php echo $row3['parentescootro2'];?></span></p>

                                            <p class="text-muted"><strong>Nombres :</strong> <span class="ml-2"><?php echo $row3['nombreotro2'];?></span></p>

                                            <p class="text-muted"><strong>Apellidos :</strong> <span class="ml-2"><?php echo $row3['apellidootro2'];?></span></p>

                                            <p class="text-muted"><strong>Cédula :</strong> <span class="ml-2"><?php echo $row3['ciotro2'];?></span></p>

                                            <p class="text-muted"><strong>Telefono celular :</strong> <span class="ml-2"><?php echo $row3['telefonocelularotro2'];?></span></p>

                                        </div>       
                                    </div>
                                </div>

                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
                        <!-- end row -->

                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 text-center text-dark">
                                Bienaventurado el que comienza por educarse antes de dedicarse a perfeccionar a los demás. Juan C. Abella
                            </div>
                           
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- js -->
        <script src="js/app.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.metisMenu.js"></script>
        
    </body>

</html>