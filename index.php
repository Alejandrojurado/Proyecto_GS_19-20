<?php
ob_start();
session_start();
?>
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
                               <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item active">
                               <a class="nav-link" href="#">Contacto</a>
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
      <div class="row">
           <div class="col ">
                <div id="carouselControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                         <div class="carousel-item active">
                              <img class="d-block w-100 tamano_img" src="image/marcas/UFPRO.jpg" alt="First slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block w-100 tamano_img" src="image/marcas/viktosbanner.jpg" alt="Second slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block w-100 tamano_img" src="image/marcas/esp.jpg" alt="Third slide">
                         </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">siguiente</span>
                    </a>
               </div>
           </div>
      </div>
      <!--Productos-->
      <div class="row ">
           <div class="col-4">
                <div class="card" style="width: 18rem;">
                     <img src="..." class="card-img-top" alt="...">
                     <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                </div>
           </div>
           <div class="col-4">
                <div class="card" style="width: 18rem;">
                     <img src="..." class="card-img-top" alt="...">
                     <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                </div>
           </div>
           <div class="col-4">
                <div class="card" style="width: 18rem;">
                     <img src="..." class="card-img-top" alt="...">
                     <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                </div>
           </div>
      </div>
      <!-- Footer -->
      <footer class="page-footer font-small blue">

           <!-- Copyright -->
           <div class="footer-copyright text-center py-3">© 2020 Copyright:
               <p>Alejandro José Jurado Reyes</p>
           </div>
           <!-- Copyright -->

      </footer>
      <!-- Footer -->


    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Optional JavaScript -->
    <script type="text/javascript" src="js/index.js"></script>
  </body>
</html>
