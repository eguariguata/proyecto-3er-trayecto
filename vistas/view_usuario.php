<?php
//include('conexion.php');
$stmt = $conexion->query('SELECT * from usuario ORDER BY idusuario ASC');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es-ES">

<head>
<meta charset="utf-8" />
<title>SIGANE | Sistema de Registro</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Planilla de Registro Usuario" name="description" />
<meta content="sigane" name="author" />
<link rel="shortcut icon" href="img/registro.ico">
<!-- css -->
<link href="css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="css/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="css/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="css/select.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet" />
<link href="css/app.min.css" rel="stylesheet" type="text/css" />
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
                                <br>
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
                                                <h3 class="mt-1 mb-1 text-white text-center">Listado de Usuarios</h3>
                                            </div> <!-- end col-->
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-4"> 
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-right">
                                                 <a href="index.php?controller=users&add" class="btn btn-success btn-sm"><i class="mdi mdi-plus-circle mr-2"></i> Usuario</a>     
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                        <table id="datatable-buttons" class="table table-striped table-hover dt-responsive nowrap" width="100%">
                                            <thead>  
                                               <tr>  
                                                <th data-column-id="name">Nombre</th>  
                                                <th data-column-id="ce">Cedula</th>  
                                                <th data-column-id="cargo">Cargo</th> 
                                                <th data-column-id="tipo">Tipo</th>  
                                                <th data-column-id="user">Usuario</th>  
                                                <th data-column-id="passw">Password</th> 
                                               
                                                <th data-column-id="commands" data-formatter="commands" data-sortable="false"></th>   
                                               </tr>  
                                            </thead> 
                                            <tbody>

                    <?php  
                    while ($row = $stmt->fetch()) {  ?>
                        
                         <tr>  
                          <td><?php echo $row["nombreusuario"]; ?></td>  
                          <td><?php echo $row["cedulausuario"]; ?></td>  
                          <td><?php echo $row["cargo"]; ?></td>
                          <td><?php echo $row["tipousuario"]; ?></td>  
                          <td><?php echo $row["username"]; ?></td>  
                          <td><?php echo $row["password"]; ?></td> 
                         
                          <td>
   <a href="index.php?controller=users&edit=<?php echo $row['idusuario']; ?> "><span class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o"></i></span></a>
   <a href="index.php?controller=users&del=<?php echo $row['idusuario']; ?> " onclick="return confirm('Estás seguro?')"><span class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></span></a>
  
                          </td>
                         </tr>                        
                   <?php } ?>
                                            </tbody>
                                        </table>
                                      </div>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer text-center">
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


        <!-- start js -->
        <script src="js/app.min.js"></script>
        <script src="js/jquery.dataTables.js"></script>
        <script src="js/dataTables.bootstrap4.js"></script>
        <script src="js/dataTables.responsive.min.js"></script>
        <script src="js/responsive.bootstrap4.min.js"></script>
        <script src="js/dataTables.buttons.min.js"></script>
        <script src="js/buttons.bootstrap4.min.js"></script>
        <script src="js/buttons.html5.min.js"></script>
        <script src="js/buttons.flash.min.js"></script>
        <script src="js/buttons.print.min.js"></script>
        <script src="js/dataTables.keyTable.min.js"></script>
        <script src="js/dataTables.select.min.js"></script>
        <script src="js/datatable-init.js"></script>
        <!-- end js-->

    </body>

</html>
