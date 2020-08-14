<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Alpha Tactical</title>
    <link rel="shortcut icon" href="image/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="boostrap/bootstrap.min.css">
    <!--Css-->
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body class="fondo ">
    <div class="container-fluid">
      <header>
           <!--menu sesion-->
           <div class="row">
                <div class="col">
                     <ul class="nav justify-content-end">
                          <li class="nav-item active">
                               <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item active">
                               <a class="nav-link" href="#">Contacto</a>
                          </li>
                          <li class="nav-item active">
                               <a class="nav-link" href="mostrarCarrito.php">Carrito(<?php
                               echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                                ?>)</a>
                          </li>

                          <li class="nav-item dropdown active margen_izquerda ">
                               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Iniciar sesión
                               </a>
                               <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                                    <form class="px-2 py-1 form-login" method="post" action="login.php">
                                         <div class="form-group">
                                              <label for="Email1">Email address </label>
                                              <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required>
                                         </div>
                                         <div class="form-group">
                                              <label for="Password">Contraseña</label>
                                              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                         </div>
                                        <button  class="btn btn-primary" name="login">Iniciar sesión</button>
                                   </form>
                                   <div class="dropdown-divider"></div>
                                   <a class="dropdown-item" href="registro.php">Registrarse</a>
                                   <a class="dropdown-item" href="forgot.php">Recuperar Contraseña</a>

                              </div>
                         </li>
                    </ul>
               </div>
          </div>
     </div>
     </div>
          <!--Alert carrito-->

          <div class="container margen_top letra">
               <?php if($mensaje!=""){ ?>
               <div class="alert alert-success">

                    <?php echo $mensaje ;?>
                    <a href="mostrarCarrito.php" class="badge badge-success">Ver Carrito</a>

               </div>
               <?php } ?>
          </div>


           <!--Jumbotron-->
           <div class="jumbotron colores fondo" >
                <div class="row">
                     <div class="col">
                          <img src="image/logo.png" alt="Logo de la empresa" id="tamno_logo">
                     </div>
                </div>
           </div>
      </header>
      <nav class="navbar navbar-expand-sm navbar-light sticky-top colores centro fondo ">
           <div class="collapse navbar-collapse centro" id="navbarNavAltMarkup">
                <div class="navbar-nav centro">
                    <button type="button" class="btn btn-secondary  margen">categorias</button>
                    <button type="button" class="btn btn-secondary  margen">Large button</button>
                    <button type="button" class="btn btn-secondary  margen">Large button</button>
                    <button type="button" class="btn btn-secondary  margen">Large button</button>
                    <button type="button" class="btn btn-secondary  margen">Large button</button>
                </div>
           </div>
      </nav>
