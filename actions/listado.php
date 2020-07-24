<?php
require 'controlDB.php';

$obj = new controlDB();

$datos=$obj->consultar("select * from users");



 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
      <head>
           <meta charset="utf-8">
           <title></title>
      </head>
      <body>
           <table border="1">
                <tr>
                    <td>idUser</td>
                    <td>email</td>
                    <td>password</td>
                    <td>name</td>
                    <td>lastname</td>
                    <td>postalcode</td>
                    <td>direction</td>
                    <td>city</td>
                    <td>stage</td>
                    <td>phonenumber</td>
                    <td>dni</td>
                    <td>active</td>
                </tr>
                <?php foreach ($datos as $fila) {?>
                <tr>
                     <td><?php echo $fila["idUser"] ?></td>
                     <td><?php echo $fila["email"] ?></td>
                     <td><?php echo $fila["password"] ?></td>
                     <td><?php echo $fila["name"] ?></td>
                     <td><?php echo $fila["lastname"] ?></td>
                     <td><?php echo $fila["postalcode"] ?></td>
                     <td><?php echo $fila["direction"] ?></td>
                     <td><?php echo $fila["city"] ?></td>
                     <td><?php echo $fila["stage"] ?></td>
                     <td><?php echo $fila["phonenumber"] ?></td>
                     <td><?php echo $fila["dni"] ?></td>
                     <td><?php echo $fila["active"] ?></td>
                </tr>
           <?php  }?>
           </table>

      </body>
 </html>
