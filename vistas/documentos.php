<?php
$query = $conexion->query('SELECT * FROM estados ORDER BY name_edo ASC');
$rowCount = $query->rowCount();
$query2 = $conexion->query('SELECT * FROM registro ORDER BY cedulaescolar ASC');
$rowCount2 = $query2->rowCount();
?> 
<!DOCTYPE html>
<html lang="es-VE">

<head>
  <meta charset="utf-8" />
    <title>SIGANE | Sistema de Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Planilla de Registro Usuario" name="description" />
    <meta content="sigane" name="author" />
    <link rel="shortcut icon" href="img/registro.ico">
    <!-- App css -->
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
                                  <br>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">                           
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-sm-12 card bg-primary card-heady profile-user-box media-body">
                                          <h2 class="mt-1 mb-1 text-dark text-center">C.E.I.N.S PARQUE LA PAZ</h2>
                                          <h3 class="mt-1 mb-1 text-white text-center">Sistema de Pre-inscripción</h3>
                                        </div> <!-- end col-->
                                      </div>
                                      <div class="row justify-content-center">
                                        <div class=" text-center col-sm-6 card bg-success card-heady profile-user-box media-body">
                                          <h3 class="mt-1 mb-1 text-white">FICHA DE REGISTRO ESCOLAR</h3>
                                        </div> <!-- end col-->
                                      </div>
                                       <?php if (isset($msg)){ ?>
                                      <div <?php echo $class_stat;?> role="alert"><?php echo $msg; ?>
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><?php } ?>
                                      
                       <div class="row">
              <div class="col-sm-12 card bg-primary card-heady profile-user-box media-body">
                <h4 class="mt-1 mb-1 text-white">DOCUMENTOS ENTREGADOS</h4>
              </div> <!-- end col-->
            </div>
            <br>
            <form class="needs-validation" novalidate="" method="post" action="index.php?controller=users&regi">
    <!-- inicio row -->
            <div class="row">
                 <div class="col-3 col-md-3 mb-3">
                <div class="form-group">                
                  <label for="doccedulaescolar">Cédula Escolar Registrada</label>
                  <select class="form-control custom-select d-block w-100" maxlength="12" data-toggle="select2" id="doccedulaescolar" name="doccedulaescolar" placeholder="Cédula Escolar" value="<?php if (isset($_POST['cedulaescolar'])) { ?><?= $_POST['cedulaescolar'] ?><?php } ?>" required="">
                    <option value="">Seleccione...</option>
                    <?php
                            if($rowCount2 > 0){
                                while($row = $query2->fetch()){ 
                                    echo '<option value="'.$row['cedulaescolar'].'">'.$row['cedulaescolar'].'</option>';
                                }
                            }else{
                                echo '<option value="">Ced. Escolar no disponible</option>';
                            }
                            ?>
                  </select>
                  <div class="invalid-feedback">
                    Seleccione un registro.
                  </div></div>
                </div>
            </div>
            <div class="row">
              <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                  <label for="partidanac1">Partida de Nacimiento</label>
                  <select class="form-control" id="partidanac1" name="partidanac1">
                  <option value="">Seleccione...</option>
                  <option>Si</option>
                  <option>No</option>
                  </select>
                  <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                  </div>
                </div> 
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">                
                  <label for="vacunas">Certificado de Vacunas</label>
                  <select class="form-control" id="vacunas" name="vacunas">
                  <option value="">Seleccione...</option>
                  <option>Si</option>
                  <option>No</option>
                  </select>
                  <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                  </div>
                </div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">                
                  <label for="boletin">Boletin Informativo</label>
                  <select class="form-control" id="boletin" name="boletin">
                  <option value="">Seleccione...</option>
                  <option>Si</option>
                  <option>No</option>
                  </select>
                  <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                  </div>
                </div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">                
                  <label for="fotonino">Foto del Niño</label>
                  <select class="form-control" id="fotonino" name="fotonino">
                  <option value="">Seleccione...</option>
                  <option>Si</option>
                  <option>No</option>
                  </select>
                  <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                  </div>
                </div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">                
                  <label for="fotorepresentante">Foto del representante</label>
                  <select class="form-control" id="fotorepresentante" name="fotorepresentante">
                  <option value="">Seleccione...</option>
                  <option>Si</option>
                  <option>No</option>
                  </select>
                  <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                  </div>
                </div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">                
                  <label for="ciotro3">Cedula del Representante</label>
                  <select class="form-control" id="ciotro3" name="ciotro3">
                  <option value="">Seleccione...</option>
                  <option>Si</option>
                  <option>No</option>
                  </select>
                  <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                  </div>
                </div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">                
                  <label for="constaciatrab">Constancia de Trabajo</label>
                  <select class="form-control" id="constaciatrab" name="constaciatrab">
                  <option value="">Seleccione...</option>
                  <option>Si</option>
                  <option>No</option>
                  </select>
                  <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                  </div>
                </div>
              </div>
              
            </div><!-- end row -->
            <hr class="mb-4">
              <div class="row justify-content-center">
                <input class="btn btn-success btn-sm" name="doc" type="submit" value="Guardar">
              </div>             
        </form> <!-- end form-->
               

					    
								      
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->

                            </div> <!-- end col -->
                        </div>
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

            </div><!-- end content-page -->

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

              <!-- js -->
        <script src="js/app.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/estados.js"></script>  
        
    </body>

</html>