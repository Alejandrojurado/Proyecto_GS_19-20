<?php include('actions/server.php') ?>
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
  <body class="fondo">
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
                          <li class="nav-item dropdown active margen_izquerda ">
                               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Iniciar sesión
                               </a>
                               <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                                    <form class="px-2 py-1 form-login" method="post" action="index.php">
                                         <div class="form-group">
                                              <label for="Email1">Email address </label>
                                              <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required>
                                         </div>
                                         <div class="form-group">
                                              <label for="Password">Contraseña</label>
                                              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                         </div>
                                        <button  class="btn btn-primary" name="login_user">Iniciar sesión</button>
                                   </form>
                                   <div class="dropdown-divider"></div>
                                   <a class="dropdown-item" href="registro.html">Registrarse</a>
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
           <div class="col-3">
                One of three columns
           </div>
           <div class="col-6">
                <form method="post" action="actions/server.php" >
                     <?php include('actions/errors.php'); ?>
                     <div class="form-row">
                          <div class="form-group col-md-6">
                               <label for="inputEmail4">Email</label>
                               <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>">
                          </div>
                          <div class="form-group col-md-3">
                               <label for="inputPassword4">Password</label>
                               <input type="password" class="form-control" name="password" id="password1" placeholder="Password">
                          </div>
                          <div class="form-group col-md-3">
                               <label for="inputPassword4">Confirmacion Contraseña</label>
                               <input type="password" class="form-control" name="password" id="password2" placeholder="Password">
                          </div>
                     </div>
                     <div class="form-group">
                          <label for="inputAddress">Nombre</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="<?php echo $name; ?>">
                     </div>
                     <div class="form-group">
                          <label for="inputAddress2">Apellidos</label>
                          <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Apellidos" value="<?php echo $lastname; ?>">
                     </div>
                     <div class="form-group">
                          <label for="inputAddress2">Línea 1 de la dirección</label>
                          <input type="text" class="form-control" id="address1" name="address1" placeholder="Apartment, studio, or floor" value="<?php echo $address1; ?>">
                     </div>
                     <div class="form-group">
                          <label for="inputAddress2">Numero de telefono</label>
                          <input type="text" class="form-control" id="phone" name="phone" placeholder="6441451451" value="<?php echo $phone; ?>">
                     </div>
                     <div class="form-group">
                          <label for="inputAddress2">dni</label>
                          <input type="text" class="form-control" id="dni" name="dni" placeholder="6441451451" value="<?php echo $dni; ?>">
                     </div>
                     <div class="form-row">
                          <div class="form-group col-md-6">
                               <label for="inputCity">Ciudad</label>
                               <input type="text" class="form-control" id="city" name="city" value="<?php echo $city; ?>">
                          </div>
                          <div class="form-group col-md-4">
                               <label for="inputZip">Provincia</label>
                               <input type="text" class="form-control" id="stage" name="stage" value="<?php echo $stage; ?>">
                          </div>
                          <div class="form-group col-md-2">
                               <label for="inputZip">Código postal</label>
                               <input type="text" class="form-control" id="postalcode" name="postalcode"value="<?php echo $zip; ?>">
                          </div>
                     </div>
                     <button type="submit" class="btn btn-primary" name="reg_user">Sign in</button>
                </form>
           </div>
           <div class="col-3">
                One of three columns
           </div>
      </div>

      <!-- Footer -->
      <footer class="page-footer font-small blue">

           <!-- Copyright -->
     <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
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
