<?php

$host="localhost";
$user="root";
$pass="";
$db="rent";


// Create connection
$conn = mysqli_connect($host, $user, $pass);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE DATABASE  $db";
mysqli_query($conn, $sql);


$conn = mysqli_connect($host, $user, $pass,$db);

mysqli_select_db($conn,$db);

$sql="CREATE TABLE `rent`.`registertwo` (`model` VARCHAR(10) NOT NULL, `no` VARCHAR(15) NOT NULL, `time1` VARCHAR(15) NOT NULL, `time2` VARCHAR(15) NOT NULL, `fare` INT NOT NULL, `address` VARCHAR(20) NOT NULL, `descr` VARCHAR(30) NOT NULL, PRIMARY KEY (`no`)) ENGINE = MyISAM";

mysqli_query($conn, $sql);

?>