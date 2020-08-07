<?php
session_start();
$mensaje="";
$ID="";
$NOMBRE="";
$PRECIO="";
$CANTIDAD="";
$NumeroProductos="";


if (isset($_POST['btnAccion'])) {
     switch ($_POST['btnAccion']) {
          case 'Agregar':
               if (is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
                    $ID=openssl_decrypt($_POST['id'],COD,KEY);
                    $mensaje.="OK ID Correcto".$ID;

               }else {
                    $mensaje.="UPSSS.. ID Incorrecto".$ID;
               }

               if (is_string( openssl_decrypt($_POST['nombre'],COD,KEY))){
                    $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
                    $mensaje.="OK nombre Correcto".$NOMBRE;

               }else {
                    $mensaje.="UPSSS.. nombre Incorrecto".$NOMBRE;
                    break;
               }

               if (is_numeric( openssl_decrypt($_POST['precio'],COD,KEY))){
                    $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
                    $mensaje.="OK precio Correcto".$PRECIO;

               }else {
                    $mensaje.="UPSSS.. precio Incorrecto".$PRECIO;
                    break;
               }

               if (is_numeric( openssl_decrypt($_POST['cantidad'],COD,KEY))){
                    $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
                    $mensaje.="OK cantidad cantidad".$CANTIDAD;

               }else {
                    $mensaje.="UPSSS.. cantidad cantidad".$CANTIDAD;
                    break;
               }

               if (!isset($_SESSION['CARRITO'])){
                    $producto=array(
                         'ID'=>$ID,
                         'NOMBRE'=>$NOMBRE,
                         'CANTIDAD'=>$CANTIDAD,
                         'PRECIO'=>$PRECIO
                    );
                    $_SESSION['CARRITO'][0]=$producto;

               }else{
                    $NumeroProductos=count($_SESSION['CARRITO']);
                    $producto=array(
                         'ID'=>$ID,
                         'NOMBRE'=>$NOMBRE,
                         'CANTIDAD'=>$CANTIDAD,
                         'PRECIO'=>$PRECIO
                    );
                    $_SESSION['CARRITO'][$NumeroProductos]=$producto;
               }
               $mensaje = print_r($_SESSION,true);



               break;

     }
}


 ?>
