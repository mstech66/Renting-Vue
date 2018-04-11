<?php

include_once "config.php";
include_once "utils.php";


$model=$_POST['model'];
$no=$_POST['no'];
$time1=$_POST['time1'];
$time2=$_POST['time2'];
$fare=$_POST['fare'];
$address=$_POST['address'];
$descr=$_POST['descr'];

  $sql = mysqli_query($conn, "INSERT INTO `register` (`model`,`no`,`time1`, `time2`, `fare`, `address`, `descr`) VALUES ('$model','$no','$time1', '$time2', '$fare', '$address', '$descr')") or die(mysqli_error());

  $result=mysqli_query($conn,$sql);

  if($result)
  {
  	echo "Registation Successfully";
  	// header("refresh:01;url=index.php");
  }
  else
  {
  	echo "Registation Unsuccessfully";
  	// header("refresh:01;url=index.php");
  }

?>