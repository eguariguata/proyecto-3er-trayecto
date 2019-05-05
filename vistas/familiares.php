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
                <h4 class="mt-1 mb-1 text-white">DATOS FAMILIARES</h4>
              </div> <!-- end col-->
            </div>
            <div class="row">
              <div class="col-sm-3 card bg-success card-heady profile-user-box media-body">
                <h4 class="mt-1 mb-1 text-white">Datos de la Madre</h4>
              </div> <!-- end col-->
            </div>
            <form class="needs-validation" novalidate="" method="post" action="index.php?controller=users&regi">
    <!-- inicio row -->
            <div class="row">
              <div class="col-3 col-md-3 mb-3">
                <div class="form-group">                
                  <label for="famcedulaescolar">Cédula Escolar Registrada</label>
                  <select class="form-control custom-select d-block w-100" maxlength="12" data-toggle="select2" id="famcedulaescolar" name="famcedulaescolar" placeholder="Cédula Escolar" value="<?php if (isset($_POST['cedulaescolar'])) { ?><?= $_POST['cedulaescolar'] ?><?php } ?>" required="">
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
                    <label for="representantemadre">Representante</label>
                    <select class="form-control" id="representantemadre" name="representantemadre">
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
                  <label for="telefonocelularmadre">Teléfono Celular</label>
                  <input type="number" class="form-control" id="telefonocelularmadre" name="telefonocelularmadre" placeholder="0" value="0">
                  <span class="font-13 text-muted">Ej.: 04161234567</span>
                  <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                  </div></div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                  <label for="telefonolocalmadre">Teléfono Local</label>
                  <input type="number" class="form-control" id="telefonolocalmadre" name="telefonolocalmadre" placeholder="0"  value="0">
                  <span class="font-13 text-muted">Ej.: 02121234567</span>
                  <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                  </div></div>
                </div>
              </div><!-- end row -->

      <!-- inicio row -->
              <div class="row">
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="nombremadre">Nombres</label>
                    <input type="text" class="form-control" id="nombremadre" name="nombremadre" placeholder="Nombres" value="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div> 
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="apellmadre">Apellidos</label>
                    <input type="text" class="form-control" id="apellmadre" name="apellmadre" placeholder="Apellidos" value="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="cimadre">Cedula de Identidad o Pasaporte</label>
                    <input type="text" class="form-control" id="cimadre" name="cimadre" placeholder="Cédula" value="">
                    <span class="font-13 text-muted">Ej.: V-12123123 o P-12345678</span>
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="edadmadre">Edad</label>
                    <input type="number" class="form-control" id="edadmadre" name="edadmadre" placeholder="0" value="0">
                    <span class="font-13 text-muted">Ej.: 33</span>
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="edocivilmadre">Estado Civil</label>
                    <select class="form-control" id="edocivilmadre" name="edocivilmadre">
                    <option value="">Seleccione...</option>
                    <option>Casada</option>
                    <option>Soltera</option>
                    <option>Divorciada</option>
                    <option>Concuvinato</option>
                    <option>Viuda</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="nacionalidadmadre">Nacionalidad</label>
                    <select class="form-control" id="nacionalidadmadre" name="nacionalidadmadre">
                    <option value="">Seleccione...</option>
                    <option>Venezolana</option>
                    <option>Extranjera</option>
                    <option>Nacionalizada</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="trabajamadre">Trabaja?</label>
                    <select class="form-control" id="trabajamadre" name="trabajamadre">
                    <option value="">Seleccione...</option>
                    <option>Si</option>
                    <option>No</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-8 col-md-8 mb-3">
                <div class="form-group">
                <label for="empresamadre">Empresa Donde Trabaja</label>
                <input type="text" class="form-control" id="empresamadre" name="empresamadre" placeholder="Empresa" value="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
                </div>
              </div><!-- end row -->
              <!-- inicio row -->
              <div class="row">
                <div class="col mb-3">
                  <div class="form-group">
                    <label for="direccionmadre">Dirección</label>
                    <textarea id="direccionmadre" name="direccionmadre" rows="2" class="form-control" placeholder="Dirección" value=""></textarea>
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div><!-- end row -->
            <div class="row">
              <div class="col-sm-3 card bg-success card-heady profile-user-box media-body">
                <h4 class="mt-1 mb-1 text-white">Datos del Padre</h4>
              </div> <!-- end col-->
            </div><!-- end row -->
    <!-- inicio row -->
              <div class="row"> 
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="representantepadre">Representante</label>
                    <select class="form-control" id="representantepadre" name="representantepadre">
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
                  <label for="telefonocelularpadre">Teléfono Celular</label>
                  <input type="number" class="form-control" id="telefonocelularpadre" name="telefonocelularpadre" placeholder="0" value="0">
                  <span class="font-13 text-muted">Ej.: 04161234567</span>
                  <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                  </div></div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                  <label for="telefonolocalpadre">Teléfono Local</label>
                  <input type="number" class="form-control" id="telefonolocalpadre" name="telefonolocalpadre" placeholder="0"  value="0">
                  <span class="font-13 text-muted">Ej.: 02121234567</span>
                  <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                  </div></div>
                </div>
              </div><!-- end row -->

      <!-- inicio row -->
              <div class="row">
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="nombrepadre">Nombres</label>
                    <input type="text" class="form-control" id="nombrepadre" name="nombrepadre" placeholder="Nombres" value="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div> 
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="apellidopadre">Apellidos</label>
                    <input type="text" class="form-control" id="apellidopadre" name="apellidopadre" placeholder="Apellidos" value="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="cipadre">Cedula de Identidad o Pasaporte</label>
                    <input type="text" class="form-control" id="cipadre" name="cipadre" placeholder="Cédula" value="">
                    <span class="font-13 text-muted">Ej.: V-12123123 o P-12345678</span>
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="edadpadre">Edad</label>
                    <input type="number" class="form-control" id="edadpadre" name="edadpadre" placeholder="0" value="0">
                    <span class="font-13 text-muted">Ej.: 33</span>
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="edocivilpadre">Estado Civil</label>
                    <select class="form-control" id="edocivilpadre" name="edocivilpadre">
                    <option value="">Seleccione...</option>
                    <option>Casado</option>
                    <option>Soltero</option>
                    <option>Divorciado</option>
                    <option>Concuvinato</option>
                    <option>Viudo</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="nacionalidadpadre">Nacionalidad</label>
                    <select class="form-control" id="nacionalidadpadre" name="nacionalidadpadre">
                    <option value="">Seleccione...</option>
                    <option>Venezolano</option>
                    <option>Extranjero</option>
                    <option>Nacionalizado</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="trabajapadre">Trabaja?</label>
                    <select class="form-control" id="trabajapadre" name="trabajapadre">
                    <option value="">Seleccione...</option>
                    <option>Si</option>
                    <option>No</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-8 col-md-8 mb-3">
                <div class="form-group">
                <label for="empresapadre">Empresa Donde Trabaja</label>
                <input type="text" class="form-control" id="empresapadre" name="empresapadre" placeholder="Empresa" value="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
                </div>
              </div><!-- end row -->

<!-- inicio row -->
              <div class="row">
                <div class="col mb-3">
                  <div class="form-group">
                    <label for="direccionpadre">Dirección</label>
                    <textarea id="direccionpadre" name="direccionpadre" rows="2" class="form-control" placeholder="Dirección" value=""></textarea>
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div><!-- end row -->
                <div class="row">
              <div class="col-sm-12 card bg-primary card-heady profile-user-box media-body">
                <h4 class="mt-1 mb-1 text-white">DATOS DE LA PERSONA AUTORIZADA A RETIRAR AL NIÑO O NIÑA</h4>
              </div> <!-- end col-->
            </div>
            <br>
    <!-- inicio row -->
              <div class="row">
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="retira">Retira</label>
                    <select class="form-control" id="retira" name="retira">
                    <option value="">Seleccione...</option>
                    <option>Transporte Escolar</option>
                    <option>Particular</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div> 
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="parentescootro2">Parentesco</label>
                    <input type="text" class="form-control" id="parentescootro2" name="parentescootro2" placeholder="Parentesco" value="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="nombreotro2">Nombres</label>
                    <input type="text" class="form-control" id="nombreotro2" name="nombreotro2" placeholder="Nombres" value="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="apellidootro2">Apellidos</label>
                    <input type="text" class="form-control" id="apellidootro2" name="apellidootro2" placeholder="Apellidos" value="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="telefonocelularotro2">Teléfono Celular</label>
                    <input type="number" class="form-control" id="telefonocelularotro2" name="telefonocelularotro2" placeholder="0" value="0">
                    <span class="font-13 text-muted">Ej.: 04161234567</span>
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="ciotro2">Cedula de Identidad o Pasaporte</label>
                    <input type="text" class="form-control" id="ciotro2" name="ciotro2" placeholder="Cedula o Pasaporte" value="">
                    <span class="font-13 text-muted">Ej.: V-12123123 o P-12345678</span>
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div><!-- end row -->
              <hr class="mb-4">
              <div class="row justify-content-center">
                <input class="btn btn-success btn-sm" name="fam" type="submit" value="Guardar">
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