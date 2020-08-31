<?php
include 'actions/config.php';
include 'actions/conexion.php';
require 'actions/controlDB.php';
include 'actions/carrito.php';
include 'template/cabecera.php';
?>




<div class="container fondo margen_top centro table-primary ">
     <div class="row">
          <div class="col">
               <h3>Lista del Carrito</h3>
               <?php if (!empty($_SESSION['CARRITO'])) {?>
               <table class="table ">
                    <tbody>
                         <tr>
                              <th width="40%">Descripción</th>
                              <th width="15%" class="text-center">Cantidad</th>
                              <th width="20%" class="text-center">Precio</th>
                              <th width="20%" class="text-center">Total</th>
                              <th width="5%">--</th>
                         </tr>
                         <?php $total = 0; ?>
                         <?php foreach ($_SESSION['CARRITO'] as $indice=>$productos) {?>
                         <tr>
                              <td width="40%" > <?php echo $productos['NOMBRE'] ?> </td>
                              <td width="15%" class="text-center"> <?php echo $productos['CANTIDAD'] ?></td>
                              <td width="20%" class="text-center"> <?php echo $productos['PRECIO'] ?>€</td>
                              <td width="20%" class="text-center"> <?php echo number_format($productos['PRECIO'] * $productos['CANTIDAD'],2 ); ?>€</td>
                              <td width="5%">
                              <form  action="" method="post">
                                   <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($productos['ID'],COD,KEY); ?>">
                                   <button
                                        type="submit"
                                        class="btn btn-danger"
                                        Name="btnAccion"
                                        value="Eliminar"
                                        >Eliminar</button>

                              </form>
                              </td>

                         </tr>
                         <?php $total = $total + ($productos['PRECIO'] * $productos['CANTIDAD']); ?>
                    <?php } ?>
                         <tr>
                              <td colspan="3" align="right"><h3>Total</h3></td>
                              <td align="right"><h3><?php echo number_format($total,2);?>€</h3></td>
                              <td></td>
                         </tr>
                         <tr>
                              <td colspan="5">
                                   <form class="" action="pagar.php" method="post">
                                        <div class="alert alert-success">
                                             <div class="form-group">
                                                  <label for="my-input">Correo de contacto</label>
                                                  <input
                                                       id="my-input"
                                                       name="email"
                                                       class="form-control"
                                                       type="email"
                                                       placeholder="Por favor escribe tú Correo"
                                                       required>
                                             </div>
                                             <small id="emailHelp"class="form-text text-muted">
                                                  Los productos se enviarán a este correo
                                             </small>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"
                                        name="btnAccion"
                                        value="proceder">
                                             Proceder a pagar >>
                                        </button>
                                   </form>
                              </td>
                         </tr>
                    </tbody>
               </table>
          </div>
     </div>
</div>

<?php }else {?>
     <div class="alert alert-success">
          No hay productos en el carrito...
     </div>
<?php } ?>






<?php include 'template/pie.php';  ?>
