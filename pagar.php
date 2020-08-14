<?php
require 'actions/controlDB.php';
include 'actions/carrito.php';
include 'template/cabecera.php';
?>

<?php
if ($_POST) {

     $total=0;
     $SID = session_id();
          foreach ($_SESSION['CARRITO'] as $indice => $producto){
               $total=$total + ($producto['PRECIO']*$producto['CANTIDAD']);

          }
          echo "<h3>".$total."</h3>";

}


 ?>






<?php
include 'template/pie.php';
 ?>
