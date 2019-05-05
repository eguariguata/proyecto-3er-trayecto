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
                                      
          
<!--Inicio formulario esudiantes--> 
                  
                    <div class="row">
                      <div class="col-sm-12 card bg-primary card-heady profile-user-box media-body">
                        <h4 class="mt-1 mb-1 text-white">DATOS DEL ESTUDIANTE</h4>
                      </div> <!-- end col-->
                    </div>
                  <form class="needs-validation" novalidate="" method="post" action="index.php?controller=users&regi">
                    <!-- inicio row -->
                    <div class="row">
                        <div class="col-3 col-md-3 mb-3">
                <div class="form-group">                
                  <label for="estcedulaescolar">Cédula Escolar Registrada</label>
                  <select class="form-control custom-select d-block w-100" maxlength="12" data-toggle="select2" id="estcedulaescolar" name="estcedulaescolar" placeholder="Cédula Escolar" value="<?php if (isset($_POST['cedulaescolar'])) { ?><?= $_POST['cedulaescolar'] ?><?php } ?>" required="">
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
                     <div class="col-3 col-md-3 mb-3">
                        <div class="form-group">
                          <label for="fechanacimiento">Fecha de Nacimiento</label>
                          <div class="input-group">
                            <input class="form-control date" type="text" id="fechanacimiento" name="fechanacimiento" data-toggle="date-picker" data-single-date-picker="true" value="" placeholder="Seleccione..."/> 
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                          </div>
                          <div class="invalid-feedback">
                              Por favor ingrese los datos correspondientes.
                          </div>
                        </div>
                      </div>
                      <div class="col-3 col-md-3 mb-3">
                        <div class="form-group">                
                          <label for="estado">Estado</label>
                          <select class="form-control" id="estado" name="estado">
                            <option value="">Seleccione...</option>
                            <?php
                            if($rowCount > 0){
                                while($row = $query->fetch()){ 
                                    echo '<option value="'.$row['id_edo'].'">'.$row['name_edo'].'</option>';
                                }
                            }else{
                                echo '<option value="">Estado no disponible</option>';
                            }
                            ?>
                          </select>
                          <div class="invalid-feedback">
                            Por favor ingrese los datos correspondientes.
                          </div>
                        </div>
                      </div>
                      <div class="col-3 col-md-3 mb-3">
                        <div class="form-group">                
                          <label for="municipio">Municipio</label>
                          <select class="form-control" id="municipio" name="municipio">
                            <option value="">Seleccione...</option>
                          </select>
                          <div class="invalid-feedback">
                          Por favor ingrese los datos correspondientes.
                          </div>
                        </div>
                      </div>
                      <div class="col-3 col-md-3 mb-3">
                        <div class="form-group">                
                              <label for="parroquia">Parroquia</label>
                              <select class="form-control" id="parroquia" name="parroquia">
                              <option value="">Seleccione...</option>
                              </select>
                            <div class="invalid-feedback">
                              Por favor ingrese los datos correspondientes.
                            </div>
                          </div>
                        </div>
                      </div> <!-- end row -->
                      <!-- inicio row -->
                      <div class="row">
                        <div class="col mb-3">
                          <div class="form-group">
                            <label for="direccionalumno">Dirección de Habitación</label>
                            <textarea id="direccionalumno" name="direccionalumno" rows="2" class="form-control" placeholder="Dirección" value""></textarea>
                            <div class="invalid-feedback">
                            Por favor ingrese los datos correspondientes.
                            </div>
                          </div>
                        </div>
                      </div><!-- end row -->
              <!-- inicio row -->
                      <div class="row">
                        <div class="col-4 col-md-4 mb-3">
                          <div class="form-group">
                            <label for="telefono1">Telefono de Habitación</label>
                            <input type="number" class="form-control" maxlength="11" id="telefono1" name="telefono1" placeholder="0" value="0"><span class="add-on"></span>
                            <div class="invalid-feedback">
                              Por favor ingrese los datos correspondientes.
                            </div>
                          </div>
                        </div>
                        <div class="col-4 col-md-4 mb-3">
                          <div class="form-group">                
                            <label for="seguromedico">Posee Seguro Medico?</label>
                            <select class="custom-select d-block w-100" id="seguromedico" name="seguromedico">
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
                            <label for="seguronombre">Nombre de la Aseguradora</label>
                            <input type="text" class="form-control" id="seguronombre" name="seguronombre" placeholder="Aseguradora" value=""><span class="add-on"></span>
                            <div class="invalid-feedback">
                              Por favor ingrese los datos correspondientes.
                            </div>
                          </div>
                        </div>
                        <div class="col-4 col-md-4 mb-3">
                          <div class="form-group">                
                            <label for="procedencia">Procedencia del Niño</label>
                            <select class="custom-select d-block w-100" id="procedencia" name="procedencia">
                            <option value="">Seleccione...</option>
                            <option>Plantel</option>
                            <option>Hogar</option>
                            </select>
                            <div class="invalid-feedback">
                              Por favor ingrese los datos correspondientes.
                            </div>
                          </div>
                        </div>
                        <div class="col-8 col-md-8 mb-3">
                          <div class="form-group">
                            <label for="nombreplantel">Nombre del Plantel</label>
                            <input type="text" class="form-control" id="nombreplantel" name="nombreplantel" placeholder="Plantel" value="">
                            <div class="invalid-feedback">
                              Por favor ingrese los datos correspondientes.
                            </div>
                          </div>
                        </div>
                      </div><!-- end row -->
                    <div class="row">
                      <div class="col-sm-12 card bg-primary card-heady profile-user-box media-body">
                        <h4 class="mt-1 mb-1 text-white">HISTORIAL CLINICO DEL ESTUDIANTE</h4>
                      </div> <!-- end col-->
                    </div>
            <!-- inicio row -->
                      <div class="row">
                        <div class="col mb-3">
                          <div class="form-group">
                            <label for="enfermedades">Enfermedades Padecidas</label>
                            <input type="text" class="form-control" id="enfermedades" name="enfermedades" placeholder="Enfermedades" value=""><span class="font-13 text-muted">Separar con guion (-)</span>
                            <div class="invalid-feedback">
                            Por favor ingrese los datos correspondientes.
                            </div>
                          </div>
                        </div>
                      </div><!-- end row -->

            <!-- inicio row -->
                      <div class="row">
                        <div class="col mb-3">
                          <div class="form-group">
                            <label for="discapacidad">Alguna Discapacidad que requiera atención especial?</label>
                            <input type="text" class="form-control" id="discapacidad" name="discapacidad" placeholder="Discapacidad" value=""><span class="font-13 text-muted">Separar con guion (-)</span>
                            <div class="invalid-feedback">
                            Por favor ingrese los datos correspondientes.
                            </div>
                          </div>
                        </div>
                      </div><!-- end row -->

            <!-- inicio row -->
                      <div class="row">
                        <div class="col mb-3">
                          <div class="form-group">
                            <label for="tratamiento">Recibe Tratamiento con Medicamento en Especial?</label>
                            <input type="text" class="form-control" id="tratamiento" name="tratamiento" placeholder="Tratamiento"value=""><span class="font-13 text-muted">Nombre medicamento / Dosis / Horas y Separar con guion (-)</span>
                            <div class="invalid-feedback">
                            Por favor ingrese los datos correspondientes.
                            </div>
                          </div>
                        </div>
                      </div><!-- end row -->
            <!-- inicio row -->
                      <div class="row">
                        <div class="col mb-3">
                          <div class="form-group">
                            <label for="alergia">Alergico a?</label>
                            <input type="text" class="form-control" id="alergia" name="alergia" placeholder="Alergias" value=""><span class="font-13 text-muted">Separar con guion (-)</span>
                            <div class="invalid-feedback">
                            Por favor ingrese los datos correspondientes.
                            </div>
                          </div>
                        </div>
                      </div><!-- end row -->
                       <hr class="mb-4"> 
                      <div class="row justify-content-center">    
                      <input class="btn btn-success btn-sm" name="est" type="submit" value="Guardar">
                      </div>
                     
              </form>
          


               


					    
								      
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