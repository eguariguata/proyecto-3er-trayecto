<!DOCTYPE html>
    <html lang="es-ES">

	<head>
        <meta charset="utf-8" />
        <title>SIGANE | Planilla de Registro Usuario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Planilla de Registro Usuario" name="description" />
        <meta content="sigane" name="author" />
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- App css -->
        <link href="css/app.min.css" rel="stylesheet" type="text/css" />
		<link href="/css/bootstrap.css" rel="stylesheet" />
		<link href="css/font-awesome.css" rel="stylesheet" />
	    <link href="css/datepicker.css" rel="stylesheet" type="text/css" />
        <link href="css/pace-theme-big-counter.css" rel="stylesheet" />
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
                                    <h4 class="page-title">Buscar registro</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">                           
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h3 class="text-center">Sistema de Registro de Pre-Inscripción</h3> 
                                        
								        
								        <!-- main content -->
								      
								        <div class="text-center"></div>
								    
								        <br/><h5 class="mb-3"></h5><br/>
								          
                           <form class="needs-validation" novalidate="" method="post" action="index.php?controller=users&busca" name="display">
                                    <div class="row">
                              <div class="col-4 col-md-4 mb-3">
                                <div class="form-group">
                                <label for="idxusuario">ID del usuario:</label>
                                <input type="text" class="form-control" id="idxusuario" name="idxusuario" placeholder="Indique el ID" value="" required="">
                                <div class="invalid-feedback">
                                  Se requiere un ID válido.
                                </div></div>
                              </div>                        
                            </div>
                                        
                            <hr class="mb-4">
                            <button class="btn btn-success btn-lg" type="submit" name="submit" value="registrar"><i class="fa fa-search"></i> Buscar</button>
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
                            <div class="col-md-12 text-center">
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

              <!-- bundle -->
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

    </body>

</html>