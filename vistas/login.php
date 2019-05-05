<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>SIGANE | Sistema de Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Planilla de Registro Usuario" name="description" />
    <meta content="sigane" name="author" />
    <link rel="shortcut icon" href="img/registro.ico">
    <!-- Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">
    
    <div class="container">

        <div class="py-5 text-center">
  
        <img src="img/Sigane2.png" alt="" />
       
        </div>

        <div class="row justify-content-center">
            <div class="col-4">
                     
                <div class="wrapper fadeInDown">
                   <div id="formContent">
                     <h1></h1>
                    <fieldset>
                        <div class="form-group">
                            <input class="form-contro fadeIn first" placeholder="Username" name="username" type="text" autofocus id="username">
                        </div>
                        <div class="form-group">
                            <input class="form-contro fadeIn second" placeholder="Password" name="password" type="password" value="" id ="password">
                        </div>

                        <div class="row align-items-center remember fadeIn third">
                        <input type="checkbox">Recordar usuario
                        </div>
                         <div class="form-group">   
                        <input type="submit" class="btn fadeIn fourth" value="ENTRAR" id="Entrar">
                         </div>
                         
                    </fieldset>
                    <!-- Remind Passowrd -->
                    <div id="formFooter">
                        <div class="d-flex justify-content-center">
                            <!-- <a href="index.php?controller=recoverpw">Olvidé mi contraseña</a> -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-white" id="mensaje">
                        </div>            
                    </div>
                  </div>
                </div>
            </div>
        </div>  
    </div> 
    <div>
  
     <!-- js -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
   

</body>

</html>