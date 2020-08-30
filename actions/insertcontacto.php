<?php
require 'controlDB.php';
     $name = $_POST["name"];
     $last =  $_POST["lastname"];
     $email = $_POST["email"];
     $mensaje = $_POST['mensaje'];
     $phone =  $_POST["phone"];





     // $sql="insert into users(email, password, name, lastname, postalcode, direction, city, stage, phonenumber, dni) values('$email', '$pass_cifrado', '$name', '$last', '$addr', '$phone', '$dni', '$city', '$stage', '$postal')";
     $sql="insert into contact (Name, Lastname, email, Text, Phone)
     VALUES ('$name', '$last', '$email', '$mensaje', '$phone')";
     echo  $sql;
     $obj = new controlDB();

     $obj->actualizar($sql);

 header("Status: 301 Moved Permanently");
 header("Location: http://localhost/index.php");
 exit;

 ?>
