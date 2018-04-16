<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysql_connect($servername , $username , $password);
$conn2 = mysql_select_db("rent");



if (isset($_POST["save"])) {

   $var = $_POST["name"];
   $var1 = $_POST["pwd"];

$sql = "SELECT * FROM signup WHERE uname = '$var' and upassword = '$var1'";
$var3=mysql_query($sql);
$var4 = mysql_num_rows($var3);

if ($var4) {
echo "success";
}
}

?>