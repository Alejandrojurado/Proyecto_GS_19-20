<?php
require 'controlDB.php';

     $name = $_POST["name"];
     $price = $_POST["price"];
     $description = $_POST["description"];
     $image = $_POST["image"];
     $type = $_POST["type"];
     $stock = $_POST["stock"];
     $code = $_POST["code"];





$sql="insert into product (Name, Price, Descripcion, image, Code, type, stock)
VALUES('$name', '$price', '$description', '$image', '$code', '$type', '$stock')";





     echo  $sql;
     $obj = new controlDB();

     $obj->actualizar($sql);

  header("Status: 301 Moved Permanently");
  header("Location: http://localhost/anadir.php");
  exit;

 ?>
