<?php
require 'actions/controlDB.php';
include 'actions/carrito.php';
include 'template/cabecera.php';
include 'actions/config.php';
include 'actions/conexion.php';
?>



<?php
if ($_POST) {

     $total=0;
     $SID = session_id();
     $Correo=$_POST['email'];
     // $fecha = NOW();
          foreach ($_SESSION['CARRITO'] as $indice => $producto){
               $total=$total + ($producto['PRECIO']*$producto['CANTIDAD']);

          }

          $sentencia=$pdo->prepare("INSERT INTO `sales` (`IdSales`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `Status`)
          VALUES (NULL, :ClaveTransaccion, NULL, NOW(), :Correo, :Total, 'pendiente');");

          $sentencia->bindParam(":ClaveTransaccion", $SID);
          $sentencia->bindParam(":Correo", $Correo);
          $sentencia->bindParam(":Total", $total);
          $sentencia->execute();
          $idVenta=$pdo->lastInsertID();


                foreach ($_SESSION['CARRITO'] as $indice => $producto){

                    $sentencia=$pdo->prepare("INSERT INTO `salesdetail`
                         (`IdSalesDetail`, `IdSale`, `IdProduct`, `Price`, `quantity`, `Discharged`)
                         VALUES (NULL, :IdSale, :IdProduct, :Price, :quantity, '0');");

                    $sentencia->bindParam(":IdSale", $idVenta);
                    $sentencia->bindParam(":IdProduct", $producto['ID']);
                    $sentencia->bindParam(":Price", $producto['PRECIO']);
                    $sentencia->bindParam(":quantity", $producto['CANTIDAD']);
                    $sentencia->execute();

               }

          // echo "<h3>".$total."</h3>";


}
 ?>

 <script src="https://www.paypalobjects.com/api/checkout.js"></script>
 <style>

     /* Media query for mobile viewport */
     @media screen and (max-width: 400px) {
         #paypal-button-container {
             width: 100%;
         }
     }

     /* Media query for desktop viewport */
     @media screen and (min-width: 400px) {
         #paypal-button-container {
             width: 250px;
             display: inline-block;
         }
     }

 </style>


     <div class="container fondo2">
          <div class="jumbotron text-center fondo2">
               <h1 class="display-4">¡PASO FINAL!</h1>
               <hr class="my-4">
               <p class="lead">Estas apunto de pagar con paypal la cantidad de:
                    <h4><?php echo number_format($total,2); ?>€</h4>
                    <!-- Set up a container element for the button -->
                    <div id="paypal-button-container"></div>
               </p>
                    <p>Los productos serán enviados una vez se proceda el pago
                         <br> <strong>Más informacion: Info.AlphaTactica@gmail.com</strong>

                    </p>


               </div>
          </div>


<script>
    paypal.Button.render({
        env: 'sandbox', // sandbox | production
        style: {
            label: 'checkout',  // checkout | credit | pay | buynow | generic
            size:  'responsive', // small | medium | large | responsive
            shape: 'rect',   // pill | rect
            color: 'gold'   // gold | blue | silver | black
        },

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create

        client: {
            sandbox:    'AbSQgCnx0sM0xhD3XWM4uKMua0wWQYI4YhKI8GWEdxgd311jyZh1jsNf2mRjB_avIdAV6WbQABuhDPSF',
            production: ''
        },

        // Wait for the PayPal button to be clicked

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '<?php echo $total ?>', currency: 'EUR' },
                            description:"Compra de productos en AlphaTactica:<?php echo number_format($total, 2); ?>€",
                            custom:"<?php echo $SID ?>#<?php echo openssl_encrypt($idVenta,COD,KEY); ?>"
                        }
                    ]
                }
            });
        },

        // Wait for the payment to be authorized by the customer

        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                // console.log(data);
                window.location="verificador.php?paymentToken="+data.paymentToken+"&paymentID="+data.paymentID;
            });
        }

    }, '#paypal-button-container');

</script>

<?php
include 'template/pie.php';
 ?>
