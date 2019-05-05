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
                      <h4 class="mt-1 mb-1 text-white">DATOS DE REGISTRO DE PRE-INSCRIPCION ESCOLAR</h4>
                    </div> <!-- end col-->
                  </div>
                <form class="needs-validation" novalidate="" method="post" action="index.php?controller=users&regi"><!-- start form -->
                  <div class="row">
                    <div class="col-3 col-md-3 mb-3">
                      <div class="form-group">
                        <label for="fecharegistro">Fecha de Registro</label>
                        <div class="input-group">
                          <input class="form-control date" type="text" id="fecharegistro" name="fecharegistro" data-toggle="date-picker" data-single-date-picker="true" placeholder="Seleccione..."/> 
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                          </div>
                        </div>
                        <div class="invalid-feedback">
                          Por favor ingrese los datos correspondientes.
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- inicio row -->
                  <div class="row">
                    <div class="col-4 col-md-4 mb-3">
                      <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" value="">
                        <div class="invalid-feedback">
                          Por favor ingrese los datos correspondientes.
                        </div>
                      </div>
                    </div>
                    <div class="col-4 col-md-4 mb-3">
                      <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" value="">
                        <div class="invalid-feedback">
                        Por favor ingrese los datos correspondientes.
                        </div>
                      </div>
                    </div>
                    <div class="col-4 col-md-4 mb-3">
                      <div class="form-group">
                        <label for="cedulaescolar">Cédula Escolar</label>
                        <input type="text" class="form-control" maxlength="12" id="cedulaescolar" name="cedulaescolar" placeholder="Cédula Escolar" value="" required="">
                        <div class="invalid-feedback">
                        Por favor ingrese los datos correspondientes.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-4 col-md-3 mb-3">
                      <div class="form-group">
                        <label for="anoescolar">Año Escolar</label>
                        <select class="form-control" id="anoescolar" name="anoescolar" placeholder="Selec...">
                        <option value="Seleccione...">Selec...</option>
                        <option>2019-2020</option>
                        <option>2020-2021</option>
                        <option>2021-2022</option>
                        <option>2022-2023</option>
                        <option>2023-2024</option>
                        <option>2024-2025</option>
                        <option>2025-2026</option>
                        <option>2026-2027</option>
                        <option>2027-2028</option>
                        <option>2028-2029</option>
                        <option>2029-2030</option>
                        </select>
                          <div class="invalid-feedback">
                          Por favor ingrese los datos correspondientes.
                        </div>
                      </div>
                    </div>
                    <div class="col-4 col-md-3 mb-3">
                      <div class="form-group">                
                        <label for="grupo">Grupo</label>
                        <select class="form-control" id="grupo" name="grupo">
                        <option value="Integral">Integral</option>
                        <option>Integral</option>
                        <option>Mañana</option>
                        <option>Tarde</option>
                        </select>
                        <div class="invalid-feedback">
                          Por favor ingrese los datos correspondientes.
                        </div>
                      </div>
                    </div>
                    <div class="col-4 col-md-3 mb-3">
                      <div class="form-group">                
                        <label for="seccion">Sección</label>
                        <select class="form-control" id="seccion" name="seccion" placeholder="Selec...">
                        <option value="">Selec...</option>
                        <option>Maternal</option>
                        <option>1-A</option>
                        <option>2-A</option>
                        <option>1-B</option>
                        <option>2-B</option>
                        <option>3-A</option>
                        </select>
                          <div class="invalid-feedback">
                            Por favor ingrese los datos correspondientes.
                          </div>
                      </div>
                    </div>
                    <div class="col-4 col-md-3 mb-3">
                      <div class="form-group">                
                        <label for="edad">Edad</label>
                        <select class="form-control" id="edad" name="edad">
                        <option value="">Seleccione...</option>
                        <option> 1_año</option>
                        <option> 2_años</option>
                        <option> 3_años</option>
                        <option> 4_años</option>
                        <option> 5_años</option>
                        <option> 6_años</option>
                        </select>
                        <div class="invalid-feedback">
                          Por favor ingrese los datos correspondientes.
                        </div>
                      </div>
                    </div>
                  </div><!-- end row -->
                    
                       <hr class="mb-4"> 
                   <div class="row justify-content-center">
                <input class="btn btn-success btn-sm" name="reg" type="submit" value="Guardar">
              </div> 
                   
                </form>            
                  </div>

                 



					    
								      
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