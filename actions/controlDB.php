<?php
define("KEY","eslay");
define("COD","AES-128-ECB");
 class controlDB {
      function __construct(){
           try {
                //Variables
                $servername = "localhost";
                $dbname = "tienda";
                $username = "root";
                $password = "admin";

                //Conexión
                $this->con=mysqli_connect($servername,$username,$password) or die ("Error en la coniexion en la Base de datos");

                //seleccion de BBD
                mysqli_select_db($this->con,$dbname) or die ("No se encontro la base de datos");

           } catch (Exception $ex) {
                throw $ex;
           }
      }
     function consultar($sql){

          $res=mysqli_query($this->con,$sql);

          $data=NULL;
          while ($fila=mysqli_fetch_assoc($res)) {

               $data[]=$fila;
          }
          return $data;
     }
     function actualizar($sql){

          mysqli_query($this->con,$sql);

          if (mysqli_affected_rows($this->con)<=0){
               echo "no se pudo realizar los cambios";
          }else {
               echo "se han realizado los cambios";
          }
     }
 }
 ?>
