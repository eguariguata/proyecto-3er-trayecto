                    <div class="navbar-custom">
                        
                        <ul class="nav topbar-left-menu float-left mb-0">
 
                          <li class="nav-item">

                          </li>
                          <li class="nav-item">
                           
                          </li>
                        </ul>
                       
                        <?php if(isset($_SESSION['username'])) { ?>
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="img/users/logueado.jpg" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name text-dark"><?= $_SESSION['username'];?></span>
                                        <span class="account-position"><?= $_SESSION['tipousuario'];?></span>
                                    </span>
                                    </a> <?php } ?>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0 text-dark">Bienvenido !</h6>
                                    </div>
                                        <!-- item-->
                                    <a href="index.php?controller=users&edit=<?= $_SESSION['idusuario'];?>" class="dropdown-item notify-item">
                                        <i class="mdi mdi-heart"></i>
                                        <span>Mi Cuenta</span>
                                    </a>
                                    <!-- item-->
                                    <?php if($_SESSION['tipousuario']=='Administrador') {
                                    echo '
                                    <a href="index.php?controller=users&view" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle"></i>
                                        <span>Usuarios</span>
                                    </a>'; 
                                     }else{   
                                     }
                                        ?>  
                                    <!-- item-->
                                    <a href="index.php?controller=logout" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout"></i>
                                        <span>Cerrar sesión</span>
                                    </a>

                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        
                    </div>
                