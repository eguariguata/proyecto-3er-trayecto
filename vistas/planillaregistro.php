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
                                      <ul class="nav nav-tabs nav-justified nav-bordered mb-2">
                                          <li class="nav-item">
                                              <a href="#registro" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                                  <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                                  <span class="d-inline p-1 bg-primary text-dark">Registro</span>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="#estudiante" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                  <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                                  <span class="d-inline p-1 bg-success text-dark">Estudiante</span>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="#familiares" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                  <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                                  <span class="d-inline p-1 bg-primary text-dark">Familiares</span>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="#representante" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                  <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                                  <span class="d-inline p-1 bg-success text-dark">Representante</span>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="#documentos" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                  <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                                  <span class="d-inline p-1 bg-primary text-dark">Documentos</span>
                                              </a>
                                          </li>
                                      </ul>
          <div class="tab-content">
                <div class="tab-pane show active" id="registro">
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
                    <div class="pull-right">
                      <button class="btn btn-success btn-sm" type="submit" name="reg" value="Guardar"><i class="fa fa-save"></i> Guardar</button>
                      <a href="index.php?controller=users&inicio"><button type="button" class="btn btn-secondary btn-sm"><i class="mdi mdi-arrow-right-bold-circle-outline"></i> Regresar</button></a>
                    </div>
                    <hr class="mb-4"> 
                </form>            
                  </div>
<!--Inicio formulario esudiantes--> 
                  <div class="tab-pane" id="estudiante">
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
                    </div>
                    <div class="row">
                       <div class="col-4 col-md-4 mb-3">
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
                      <div class="pull-right">
                        <button class="btn btn-success btn-sm" type="submit" name="est" value="Guardar"><i class="fa fa-save"></i> Guardar</button>
                        <a href="index.php?controller=users&inicio"><button type="button" class="btn btn-secondary btn-sm"><i class="mdi mdi-arrow-right-bold-circle-outline"></i> Regresar</button></a>
                      </div>
                      <hr class="mb-4"> 
              </form>
            </div>


                <div class="tab-pane" id="familiares">
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
                    <div class="col-4 col-md-3 mb-3">
                      <div class="form-group">
                        <label for="estcedulaescolar">Cédula Escolar Registrada</label>
                        <input type="text" class="form-control" maxlength="12" id="estcedulaescolar" name="estcedulaescolar" placeholder="Cédula Escolar" value="<?php if (isset($_POST['cedulaescolar'])) { ?><?= $_POST['cedulaescolar'] ?><?php } ?>" required="">
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
          </div>
                </div><!-- end tab-panel-->


                <div class="tab-pane" id="representante">
                    <div class="row">
              <div class="col-sm-12 card bg-primary card-heady profile-user-box media-body">
                <h4 class="mt-1 mb-1 text-white">DATOS DEL REPRESENTANTE LEGAL</h4>
              </div> <!-- end col-->
            </div>
            <br>
            <form class="needs-validation" novalidate="" method="post" action="index.php?controller=users&regi">
              <!-- inicio row -->
              <div class="row"> 
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="parentescootro1">Parentesco</label>
                    <input type="text" class="form-control" id="parentescootro1" name="parentescootro1" placeholder="arentesco" value="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="telefonocelularotro1">Teléfono Celular</label>
                    <input type="number" class="form-control" id="telefonocelularotro1" name="telefonocelularotro1" placeholder="0" value="0">
                    <span class="font-13 text-muted">Ej.: 04161234567</span>
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="telefonolocalotro1">Teléfono Local</label>
                    <input type="number" class="form-control" id="telefonolocalotro1" name="telefonolocalotro1" placeholder="0" value="0">
                    <span class="font-13 text-muted">Ej.: 02121234567</span>
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
                    <label for="nombreotro1">Nombres</label>
                    <input type="text" class="form-control" id="nombreotro1" name="nombreotro1" placeholder="Nombres" value="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div> 
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="apellidootro1">Apellidos</label>
                    <input type="text" class="form-control" id="apellidootro1" name="apellidootro1" placeholder="Apellidos" value="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="ciotro1">Cedula de Identidad o Pasaporte</label>
                    <input type="text" class="form-control" id="ciotro1" name="ciotro1" placeholder="Cedula o Pasaporte" value="">
                    <span class="font-13 text-muted">Ej.: V-12123123 o P-12345678</span>
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="edadotro1">Edad</label>
                    <input type="number" class="form-control" id="edadotro1" name="edadotro1" placeholder="0" value="0">
                    <span class="font-13 text-muted">Ej.: 33</span>
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="edocivilotro1">Estado Civil</label>
                    <select class="form-control" id="edocivilotro1" name="edocivilotro1">
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
                    <label for="nacionalidadotro1">Nacionalidad</label>
                    <select class="form-control" id="nacionalidadotro1" name="nacionalidadotro1">
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
                    <label for="trabajootro1">Trabaja?</label>
                    <select class="form-control" id="trabajootro1" name="trabajootro1" >
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
                    <label for="empresaotro1">Empresa Donde Trabaja</label>
                    <input type="text" class="form-control" id="empresaotro1" name="empresaotro1" placeholder="Empresa" value="">
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
                    <label for="direccionotro1">Dirección</label>
                    <textarea id="direccionotro1" name="direccionotro1" rows="2" class="form-control" placeholder="Dirección" Value=""></textarea>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div><!-- end row -->
              <div class="row">
                <div class="col-4 col-md-3 mb-3">
                  <div class="form-group">
                    <label for="estcedulaescolar">Cédula Escolar Registrada</label>
                    <input type="text" class="form-control" maxlength="12" id="estcedulaescolar" name="estcedulaescolar" placeholder="Cédula Escolar" value="<?php if (isset($_POST['cedulaescolar'])) { ?><?= $_POST['cedulaescolar'] ?><?php } ?>" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div>
                 <hr class="mb-4">
            <div class="row justify-content-center">            
              <input class="btn btn-success btn-sm" name="rep" type="submit" value="Guardar">
            </div>
            </form>
                </div><!-- end tab-panel-->


                  <div class="tab-pane" id="documentos">
                       <div class="row">
              <div class="col-sm-12 card bg-primary card-heady profile-user-box media-body">
                <h4 class="mt-1 mb-1 text-white">DOCUMENTOS ENTREGADOS</h4>
              </div> <!-- end col-->
            </div>
            <br>
            <form class="needs-validation" novalidate="" method="post" action="index.php?controller=users&regi">
    <!-- inicio row -->
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
                 <div class="col-4 col-md-4 mb-3">
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
            </div><!-- end row -->
            <hr class="mb-4">
              <div class="row justify-content-center">
                <input class="btn btn-success btn-sm" name="doc" type="submit" value="Guardar">
              </div>             
        </form> <!-- end form-->
                </div><!-- end tab-panel-->
            
            </div><!-- end tab-content-->



					    
								      
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