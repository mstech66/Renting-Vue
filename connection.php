<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rent";

$conn = new mysqli($servername,$username,$password,$dbname);

$uname = $_POST['name'];
$upassword = $_POST['pwd'];
$uemail = $_POST['email'];
$uadhar = $_POST['aadhar'];
$upan = $_POST['pan'];
$ubirthdate = $_POST['bd'];
$umobile = $_POST['mobile'];
$uaddress = $_POST['addr'];

$sql  = "INSERT INTO signup (uname,upassword,uemail,uadhar,upan,ubirthdate,umobile,uaddress) VALUES ('$uname','$upassword','$uemail','$uadhar','$upan','$ubirthdate','$umobile','$uaddress')";


$conn -> query($sql);
$conn -> close();

  ?>