<?php include_once('edit_pdo.php');?>
<!DOCTYPE html>
<html lang="es-VE">

<head>
  <meta charset="utf-8" />
  <title>SIGANE | Sistema de Registro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Registro Usuario" name="description" />
  <meta content="sigane" name="author" />
  <link rel="shortcut icon" href="img/registro.ico">
  <link href="css/app.min.css" rel="stylesheet" type="text/css" />
	<link href="/css/bootstrap.css" rel="stylesheet" />
	<link href="css/font-awesome.css" rel="stylesheet" />
  <link href="css/datepicker.css" rel="stylesheet" type="text/css" />
  <link href="css/icons.min.css" rel="stylesheet" type="text/css" />
</head>
  <script>
  $(document).ready(function(){
  });
  </script>
    <body>
      <!-- Begin page -->
      <div class="wrapper">
        <!-- Left Sidebar Start -->
        <?php include('sidebar.php');?>
        <!-- Left Sidebar End -->
        <!-- =============================================== -->
        <!-- Start Page Content here -->
        <!-- =============================================== -->
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
                      <br>
<!--                         <div class="page-title-box">
                            <div class="page-title-right">
                                
                            </div>
                            <h4 class="page-title text-dark">Edición de usuario</h4>
                        </div> -->
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
                                    <h3 class="mt-1 mb-1 text-white text-center">Ficha Edición de Usuarios</h3>
                                  </div> <!-- end col-->
                                </div>
					        <!-- main content -->
                  <div class="row">
                    <div class="col-sm-3 card bg-success card-heady profile-user-box media-body">
                      <h4 class="mt-1 mb-1 text-white">Datos del Usuario</h4>
                    </div> <!-- end col-->
                  </div>
                  <br>
        <?php if (isset($msg)){ ?>
        <div <?php echo $class_stat;?> role="alert"><?php echo $msg; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><?php } ?>


      <form class="needs-validation" novalidate="" method="post" action="index.php?controller=users&edit=<?php echo $_GET['edit'];?>">
      <div class="row">
        <div class="col-4 col-md-4 mb-3">
          <div class="form-group">
            <label for="nombreusuario">Nombre y Apellido</label>
            <input type="text" class="form-control" id="nombreusuario" name="nombreusuario_updated" placeholder="Nombre y Apellido" value="<?php echo $row['nombreusuario'];?>" required="">
            <div class="invalid-feedback">
              Por favor ingrese los datos correspondientes.
            </div>
          </div>
        </div>
        <div class="col-4 col-md-4 mb-3">
          <div class="form-group">
            <label for="cedula">Cédula</label>
              <input type="number" class="form-control" id="cedula" name="cedula_updated" placeholder="Cédula" value="<?php echo $row['cedulausuario'];?>" required="">
              <span class="font-13 text-muted">Ej.: v-12123123</span>
            <div class="invalid-feedback">
              Por favor ingrese los datos correspondientes.
            </div>
          </div>
        </div>
        <div class="col-4 col-md-4 mb-3">
        <div class="form-group">                
          <label for="cargo">Cargo</label>
          <select class="custom-select d-block w-100" value= "" id="cargo" name="cargo_updated" >
            <option value="<?php echo $row['cargo'];?>"><?php echo $row['cargo'];?></option>
            <option>Director(a)</option>
            <option>Subdirector(a)</option>
            <option>Coordinador(a)</option>
            <option>Secretario(a)</option>
            <option>Docente</option>
          </select>
          <div class="invalid-feedback">
            Por favor ingrese los datos correspondientes.
          </div></div>
        </div>
      </div>

      <div class="row">              
        <div class="col-4 col-md-3 mb-3">
        <div class="form-group">                
          <label for="tipousuario">Tipo de Usuario</label>
          <select class="custom-select d-block w-100" id="tipousuario" name="tipousuario_updated" >
            <option value="<?php echo $row['tipousuario'];?>"><?php echo $row['tipousuario'];?></option>
            <?php if($_SESSION['tipousuario']=='Administrador') {
            echo '<option>Administrador</option>'; 
             }else{   
             }
                ?>  
            <option>Usuario</option>
          </select>
          <div class="invalid-feedback">
            Por favor ingrese los datos correspondientes.
          </div></div>
        </div>
        <div class="col-4 col-md-3 mb-3">
          <div class="form-group">
          <label for="username">Usuario</label>
          <input type="text" class="form-control" id="username" name="username_updated" placeholder="Username" value="<?php echo $row['username'];?>" required="">
          <div class="invalid-feedback">
            Por favor ingrese los datos correspondientes.
          </div></div>
        </div>
        <div class="col-4 col-md-3 mb-3">
          <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password_updated" placeholder="Contraseña" value="<?php echo $row['password'];?>" required="">
          <div class="invalid-feedback">
            Por favor ingrese los datos correspondientes.
          </div></div>
        </div>
        <div class="col-4 col-md-3 mb-3">
          <div class="form-group">
         <label for="password">Confirme contraseña</label>
      <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirme contraseña" required value="">
      </div></div>  
        <div class="col-4 col-md-4 mb-3">
          <div class="form-group">
          <!-- <label for="id">ID</label> -->
          <input type="hidden" class="form-control" id="idusuario" name="idusuario_updated" placeholder="Password" value="<?php echo $row['idusuario'];?>" required="">
          <div class="invalid-feedback">
            Por favor ingrese los datos correspondientes.
          </div></div>
        </div>
        </div>
        <div class="pull-right">
          <button class="btn btn-success btn-sm" type="submit" value="registrar"><i class="fa fa-save"></i> Actualizar</button>
          <a href="index.php?controller=users&view"><button type="button" class="btn btn-secondary btn-sm"><i class="mdi mdi-arrow-right-bold-circle-outline"></i> Regresar</button></a>
        </div>
        <hr class="mb-4">
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

    <script src="js/app.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/mask-script.js"></script>
    <script src="js/jquery.metisMenu.js"></script>       
    <script>
 
    (function() {
      'use strict';

      window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
<?php $conexion = null; ?>
    </body>
</html>