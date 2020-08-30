<?php

define('USER', 'root');
define('PASSWORD', 'admin');
define('HOST', 'localhost');
define('DATABASE', 'tienda');

try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
session_start();

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // echo $password;
    // echo $email;


    $query = $connection->prepare("SELECT * FROM users WHERE email = :email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);



    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['idUser'];
            header("Status: 301 Moved Permanently");
            header("Location: http://localhost/index_log.php");
                exit;
        } else {
             header("Status: 301 Moved Permanently");
            header("Location: http://localhost/index.php");
                exit;
        }
   }
    }
?>
