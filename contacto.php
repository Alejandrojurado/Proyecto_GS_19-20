<?php
// ob_start();
// session_start();
include 'actions/config.php';
include 'actions/conexion.php';
require 'actions/controlDB.php';
include 'actions/carrito.php';
include 'template/cabecera.php';
?>

<div class="container">
     <div class="row">
          <div class="col-9 centro margen_top">
               <form method="post" action="actions/insertcontacto.php" >
                    <div class="form-group">
                         <label for="inputAddress">Email</label>
                         <input type="email" class="form-control" id="email" name="email" placeholder="example@explame.com" >
                    </div>
                    <div class="form-group">
                         <label for="inputAddress">Nombre</label>
                         <input type="text" class="form-control" id="name" name="name" placeholder="Jonh" >
                    </div>
                    <div class="form-group">
                         <label for="inputAddress2">Apellidos</label>
                         <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Flint" >
                    </div>

                    <div class="form-group">
                         <label for="inputAddress2">Numero de telefono</label>
                         <input type="text" class="form-control" id="phone" name="phone" placeholder="6441451451" >
                    </div>

                    <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputCity">Mensaje</label>
                             <textarea name="mensaje" id="mensaje" rows="8" cols="80" class="form-control"></textarea>
                         </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="reg_enviar">Enviar</button>
               </form>
          </div>
     </div>
</div>
</div>






<?php
include 'template/pie.php';
 ?>
