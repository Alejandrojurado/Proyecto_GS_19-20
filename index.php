<?php
// ob_start();
// session_start();
require 'actions/controlDB.php';
include 'actions/carrito.php';
include 'template/cabecera.php';
?>
     <!-- carousel -->
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
     <div class="container margen_top ">
          <div class="row">
               <?php
               $obj = new controlDB();
               $datos=$obj->consultar("select * from  product");
               //print_r($datos);
               ?>

               <?php foreach ($datos as $productos) {?>
                    <div class="col-3">
                         <div class="card targeta">
                              <img src="<?php echo $productos['image'] ?>"
                              class="card-img-top tarjetas img"
                              alt="<?php echo $productos['Name'] ?>"
                              title="<?php echo $productos['Name'] ?>"
                              data-toggle="popover"
                              data-trigger="hover"
                              data-content="<?php echo $productos['Descripcion'] ?>" >
                              <div class="card-body">
                                   <span><?php echo $productos['Name'] ?></span>
                                   <h5 class="card-tittle"><?php echo $productos['Price'] ?>€</h5>
                                   <form action="" method="post">
                                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($productos['idProduct'],COD,KEY); ?>">
                                        <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($productos['Name'],COD,KEY); ?>" >
                                        <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($productos['Price'],COD,KEY); ?>" >
                                        <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY); ?>" >

                                        <button class="btn btn-primary" type="submit" name="btnAccion" value="Agregar" >Agregar al carrito</button>
                                   </form>
                              </div>
                         </div>
                    </div>
               <?php } ?>



<?php
include 'template/pie.php';
 ?>
