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
	<link href="/css/bootstrap.css" rel="stylesheet" />
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
		                                    <h3 class="mt-1 mb-1 text-white text-center">Ficha Registro de Usuarios</h3>
		                                  </div> <!-- end col-->
		                                </div>
								        <!-- main content -->
								        <div class="row">
						                    <div class="col-sm-3 card bg-success card-heady profile-user-box media-body">
						                      <h4 class="mt-1 mb-1 text-white">Datos del Usuario</h4>
						                    </div> <!-- end col-->
						                </div>
						                <br>
								        <div class="text-center"></div>
										<?php if (isset($msg)){ ?>
                            <div <?php echo $class_stat;?> role="alert"><?php echo $msg; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><?php } ?>


						          <form role="form" method="post" action="index.php?controller=users&add">
						            
						            <div class="row">
						              <div class="col-4 col-md-4 mb-3">
						                <div class="form-group">
						                <label for="nombreusuario">Nombre y Apellido</label>
						                <input type="text" class="form-control" maxlength="30" id="nombreusuario" name="nombreusuario" placeholder="Nombre y Apellido" value="" required>
						                <div class="invalid-feedback">
						                  Ingrese un nombre válido.
						                </div></div>
						              </div>
						              <div class="col-4 col-md-4 mb-3">
						                <div class="form-group">
						                <label for="cedula">Cédula</label>
						                <input type="number" class="form-control" id="cedula" name="cedula" placeholder="Cédula" value="" required data-toggle="input-mask" data-mask-format="00000000"><span class="font-13 text-muted">ej. "12345678"</span>
						                <div class="invalid-feedback">
						                  Ingrese una cedula válida.
						                </div></div>
						              </div>
						              <div class="col-4 col-md-4 mb-3">
						              <div class="form-group">                
						                <label for="cargo">Cargo</label>
						                <select class="form-control" id="cargo" name="cargo" required>
						                  <option value="">Seleccione...</option>
						                  <option value="Director(a)">Director(a)</option>
						                  <option value="Subdirector(a)">Subdirector(a)</option>
						                  <option value="Coordinador(a)">Coordinador(a)</option>
						                  <option value="Secretario(a)">Secretario(a)</option>
						                  <option value="Docente">Docente</option>
						                </select>
						                <div class="invalid-feedback">
						                  Seleccione un cargo.
						                </div></div>
						              </div>
						            </div>

						            <div class="row">              
						              <div class="col-4 col-md-3 mb-3">
						              <div class="form-group">                
						                <label for="tipousuario">Tipo de Usuario</label>
						                <select class="form-control" id="tipousuario" name="tipousuario" required>
						                  <option value="">Seleccione...</option>
						                  <option value="Administrador">Administrador</option>
						                  <option value="Usuario">Usuario</option>
						                </select>
						                <div class="invalid-feedback">
						                  Seleccione un Tipo de usuario.
						                </div></div>
						              </div>
						              <div class="col-4 col-md-3 mb-3">
						                <div class="form-group">
						                <label for="username">Usuario</label>
						                <input type="text" class="form-control" maxlength="15" id="username" name="username" placeholder="Username" value="" required>
						                <div class="invalid-feedback">
						                  Ingrese un usuario válido.
						                </div></div>
						              </div>
						              <div class="col-4 col-md-3 mb-3">
						                <div class="form-group">
						                <label for="password">Contraseña</label>
						                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" required>
						                <div class="invalid-feedback">
						                  Ingrese una contraseña válida.
						                </div></div>
						              </div> 
						              <div class="col-4 col-md-3 mb-3">
						                <div class="form-group">
						               	<label for="password">Confirme Password</label>
						                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirme Password" required value="">
						                <div class="invalid-feedback">
						                  Ingrese una contraseña válida.
						                </div></div>
						              </div>
						            </div>  
						              <hr class="mb-4">
							        <div class="row justify-content-center">
							          <button class="btn btn-success btn-sm" type="submit" value="registrar"><i class="fa fa-save"></i> Guardar</button> <a href="index.php?controller=users&view"><button type="button" class="btn btn-secondary btn-sm"><i class="mdi mdi-arrow-right-bold-circle-outline"></i> Regresar</button></a>
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
        
    </body>

</html>