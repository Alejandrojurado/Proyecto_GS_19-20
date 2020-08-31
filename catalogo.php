<?php
// ob_start();
// session_start();
include 'actions/config.php';
include 'actions/conexion.php';
require 'actions/controlDB.php';
include 'actions/carrito.php';
include 'template/cabecera.php';
?>

<!--Productos-->
<div class="container margen_top ">
     <div class="row">
          <?php
          $obj = new controlDB();
          $datos=$obj->consultar("select * from  product");
          //print_r($datos);
          $datos=$pdo->prepare("select * from  product");
          $datos->execute();
          ?>


          <?php foreach ($datos as $productos ) {?>
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
                              <span class="letra"><?php echo $productos['Name'] ?></span>
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
