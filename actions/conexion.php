<?php

     $servidor="mysql:dbname=".BD.";host=".SERVIDOR;
     try {
          $pdo = new PDO($servidor,USUARIO,PASSWORD,
          array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
          // echo "<scrpit>alert('conectado')</scrpit>";

     } catch (PDOException $e) {
          // echo "<scrpit>alert('Error')</scrpit>";
     }


 ?>
