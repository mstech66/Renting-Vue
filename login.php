<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'rent');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {

   $email = mysqli_real_escape_string($db,$_POST['email']);
   $password = mysqli_real_escape_string($db,$_POST['password']);

   $sql = "SELECT * FROM signup WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
      
    $count = mysqli_num_rows($result);
    if($count == 1) {
         session_register("email");
         $_SESSION['login_user'] = $email;
         
         header("location: index.html");
      }else {
         $error = "Your Email or Password is invalid";
      }
   }
?>