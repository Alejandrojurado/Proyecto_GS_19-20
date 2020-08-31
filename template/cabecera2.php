<?php
if(!isset($_SESSION))
    {
        session_start();
    }

     ?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Alpha Tactical</title>
    <link rel="shortcut icon" href="image/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="boostrap/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
    <!--Css-->
    <link rel="stylesheet" href="css/style.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  </head>

  <body class="fondo estiloletra ">
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
                               <a class="nav-link" href="contacto.php">Contacto</a>
                          </li>
                          <li class="nav-item active">
                               <a class="nav-link" href="mostrarCarrito.php">Carrito(<?php
                               echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                                ?>)</a>
                          </li>

                          <li class="nav-item active">
                               <a class="nav-link" href="">logout <span class="sr-only">(current)</span></a>
                          </li>

                          <li class="nav-item dropdown active">
                               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Zona Administrativa
                               </a>
                               <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                                   <a class="dropdown-item" href="anadir.php">Insertar productos</a>
                                   <a class="dropdown-item" href="actions/listado.php">Mostrar usuarios</a>

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
           <div class="container">
                <div class="jumbotron colores fondo centro"  >
                     <div class="row">
                          <div class="col">
                               <img src="image/logo.png" alt="Logo de la empresa" id="tamno_logo">
                          </div>
                     </div>
                </div>
           </div>
      </header>
      <nav class="navbar navbar-expand-sm navbar-light sticky-top colores centro fondo ">
           <div class="collapse navbar-collapse centro" id="navbarNavAltMarkup">
                <div class="navbar-nav centro">
                    <a href="catalogo.php"><button type="button" class="btn btn-secondary  margen">Catalogo</button></a>
                    </button>
                    <!-- <button type="button" class="btn btn-secondary  margen">Large button</button> -->
                    <!-- <button type="button" class="btn btn-secondary  margen">Large button</button> -->
                    <!-- <button type="button" class="btn btn-secondary  margen">Large button</button> -->
                    <!-- <button type="button" class="btn btn-secondary  margen">Large button</button> -->
                </div>
           </div>
      </nav>
