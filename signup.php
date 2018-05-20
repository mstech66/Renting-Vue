<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rent";

$conn = new mysqli($servername,$username,$password,$dbname);

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$aadhar = $_POST['aadhar'];
$pan = $_POST['pan'];
$bdate = $_POST['bdate'];
$no = $_POST['no'];
$address = $_POST['address'];

$sql  = "INSERT INTO signup (name,password,email,aadhar,pan,bdate,no,address) VALUES ('$name','$password','$email','$aadhar','$pan','$bdate','$no','$address')";

$conn -> query($sql);
$conn -> close();
header("refresh:01;url=login.html");
  ?>