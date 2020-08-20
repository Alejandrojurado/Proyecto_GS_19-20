<?php
require 'controlDB.php';
     $email = $_POST["email"];
     $pass = $_POST["password1"];
     $name = $_POST["name"];
     $last =  $_POST["lastname"];
     $addr = $_POST["address1"];
     $phone = $_POST["phone"];
     $dni = $_POST["dni"];
     $city = $_POST["city"];
     $stage = $_POST["stage"];
     $postal = $_POST["postalcode"];

     $pass_cifrado = password_hash($pass , PASSWORD_DEFAULT);

     $sql="insert into users(email, password, name, lastname, postalcode, direction, city, stage, phonenumber, dni) values('$email', '$pass_cifrado', '$name', '$last', '$addr', '$phone', '$dni', '$city', '$stage', '$postal')";

     $obj = new controlDB();

     $obj->actualizar($sql);

header("Status: 301 Moved Permanently");
header("Location: http://localhost/index.php");
exit;

 ?>
