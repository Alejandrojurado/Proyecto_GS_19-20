<?php
     //Conesion bd
     $servername = "localhost";
     $username = "root";
     $password = "admin";
     $dbname = "tienda";
     $dbtable = "users";
     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
     }

     // variables enviadas con post
     $email = $_POST['email'];
     $password = $_POST['password'];
     $name = $_POST['name'];
     $lastname = $_POST['lastname'];
     $address1 = $_POST['address1'];
     $address2 = $_POST['address2'];
     $phone = $_POST['phone'];
     $city = $_POST['city'];
     $stage = $_POST['stage'];
     $zip = $_POST['postalcode'];
     $dni = $_POST['dni'];

     $resultado=mysql_query("SELECT * FROM ".$db_table_name." WHERE Email = '".$email."'", $conn);
     if (mysql_num_rows($resultado)>0){
          echo "no esta";
     }
     else {
          $sql = "INSERT INTO $dbtable (email, password, name, lastname, postalcode, direction, direction2, city ,stage, phonenumber, dni)
          VALUES ('$email',md5('$password'); ,  '$name','$lastname','$address1','$address2','$phone','$city','$stage','$zip' ,'$dni' )";

     }






     	$result = $conn->query($sql);

          if ($result->num_rows > 0) {

     			echo json_encode(array('success' => 1));
     	}

      	else {
          //echo json_encode(array('success' => 0));
     	}




?>
