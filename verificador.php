<?php
require 'actions/controlDB.php';
include 'actions/carrito.php';
include 'template/cabecera.php';
include 'actions/config.php';
include 'actions/conexion.php';
?>
<?php


     $ClientID="AbSQgCnx0sM0xhD3XWM4uKMua0wWQYI4YhKI8GWEdxgd311jyZh1jsNf2mRjB_avIdAV6WbQABuhDPSF";
     $Secret="EKq3317vQE9SsBGS29MtcrPCKzlBCKj_XgRSqnngq3GMm7FBC-dO2I5hUB0xncftYMIwCriohWF6wSdn";


          $Login=curl_init("https://api.sandbox.paypal.com/v1/oauth2/token");

          curl_setopt($Login,CURLOPT_RETURNTRANSFER,true);

          curl_setopt($Login,CURLOPT_USERPWD,$ClientID.":".$Secret);

          curl_setopt($Login,CURLOPT_POSTFIELDS,"grant_type=client_credentials");

          $Respuesta = curl_exec($Login);
          $objRespuesta=json_decode($Respuesta);
          $AccessToken=$objRespuesta->access_token;

          $venta=curl_init("https://api.sandbox.paypal.com/v1/payments/payment/".$_GET['paymentID']);

          curl_setopt($venta,CURLOPT_HTTPHEADER,array("Content-Type: application/json","Authorization: Bearer ".$AccessToken));
          curl_setopt($venta,CURLOPT_RETURNTRANSFER,true);

          $Respuesta_venta=curl_exec($venta);

          $objDatosTransacion = json_decode($Respuesta_venta);



          $state=$objDatosTransacion->state;
          $email=$objDatosTransacion->payer->payer_info->email;
          $total=$objDatosTransacion->transactions[0]->amount->total;
          $currency=$objDatosTransacion->transactions[0]->amount->currency;
          $custom=$objDatosTransacion->transactions[0]->custom;




          $clave = explode("#",$custom);
          $SID=$clave[0];
          $claveVenta=openssl_decrypt($clave[1],COD,KEY);
          curl_close($venta);
          curl_close($Login);



          if ($state=="approved") {
               $mensajePaypal = "<h3>Pago aprobado</h3>";

               $sentencia = $pdo->prepare("UPDATE `sales`
                     SET `PaypalDatos` = :PaypalDatos,
                     `Status` = 'aprobado'
                     WHERE `sales`.`IdSales` = :ID;");
               $sentencia-> bindParam(":ID",$claveVenta);
               $sentencia-> bindParam(":PaypalDatos",$Respuesta_venta);
               $sentencia->execute();

               $sentencia = $pdo->prepare("UPDATE `sales`
                     SET status = 'completo'
                     WHERE ClaveTransaccion = :ClaveTransaccion
                     AND Total = :Total
                     AND IdSales = :IdSales  ");

                $sentencia-> bindParam(":ClaveTransaccion",$SID);
                $sentencia-> bindParam(":Total",$total);
                $sentencia-> bindParam(":IdSales",$claveVenta);
                $sentencia->execute();

                $completado = $sentencia->rowCount();



          } else {
               $mensajePaypal = "<h3>Hay un problema con el pago de paypal</h3>";

          }





 ?>
 <div class="container fondo2">
      <div class="jumbotron text-center fondo2">
           <h1 class="display-4">Listo</h1>
           <hr class="m-y-md">
           <p class="lead"><?php echo $mensajePaypal; ?></p>
           <p>
                <?php
                    if ($completado >= 1) {


                          $sentencia = $pdo->prepare("SELECT * FROM salesdetail,product
                          WHERE salesdetail.IdProduct=product.idProduct
                           AND salesdetail.IdSale=:IdSales");

                           $sentencia-> bindParam(":IdSales",$claveVenta);
                           $sentencia->execute();

                           $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                           // print_r($listaProductos);



                    }



                ?>
                <div class="row">
                     <?php foreach ($listaProductos as $producto ) { ?>
                          <div class="col-3">
                               <div class="card targeta">
                                    <img class="card-img-top " src="<?php echo $producto['image']; ?>" alt="imagen">
                                    <div class="card-body">
                                        <p class="card-text"> <small><?php echo $producto['Name']; ?></small> </p>
                                   </div>
                              </div>
                         </div>
                  <?php  } ?>

             </div><br>
                <small class="margen_top letra">Su pedido esta en tramites de ser envidado para mas información:Info.AlphaTactica@gmail.com</small>

      </div>


 </div>








 <?php
 include 'template/pie.php';
  ?>
