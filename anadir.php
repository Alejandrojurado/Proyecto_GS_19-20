<?php
// ob_start();

include 'actions/config.php';
include 'actions/conexion.php';
require 'actions/controlDB.php';
include 'actions/carrito.php';
include 'template/cabecera2.php';

?>

<div class="container">
     <div class="row">
          <div class="col-9 centro margen_top">
               <form method="post" action="actions/anadir.php" >
                    <div class="form-group">
                         <label for="inputAddress">Nombre del producto</label>
                         <input type="text" class="form-control" id="name" name="name" placeholder="" required>
                    </div>
                    <div class="form-group">
                         <label for="inputAddress">Precio</label>
                         <input type="number" class="form-control" id="price" name="price" placeholder="350" required>
                    </div>
                    <div class="form-group">
                         <label for="inputAddress">Descripcion</label>
                         <textarea name="description" rows="8" cols="80" required></textarea>
                    </div>
                    <div class="form-group">
                         <label for="inputAddress">Imangen</label>
                         <input type="url" class="form-control" id="image" name="image" placeholder="https://www.picclickimg.com/d/l400/pict/401689929373_"  required>
                    </div>
                    <div class="form-group">
                         <label for="inputAddress">codigo de referencia</label>
                         <input type="text" class="form-control" id="code" name="code" placeholder="jjj5081" required >
                    </div>
                    <div class="form-group">
                         <label for="inputState">tipos de productos</label>
                              <select name="type" id="inputState" class="form-control" required>
                                   <option selected>Choose...</option>
                                   <option>Chaleco</option>
                                   <option>Guante</option>
                                   <option>Botas</option>
                                   <option>Pouch</option>
                                   <option>Cinturones</option>
                                   <option>Uniformes</option>
                                   <option>Cascos</option>
                                   <option>Gorras</option>
                                   <option>Protecciones</option>
                              </select>
                         </div>
                         <div class="form-group">
                              <label for="inputAddress">Cantidad de productos</label>
                              <input type="number" class="form-control" id="stock" name="stock" placeholder="50" required>
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
