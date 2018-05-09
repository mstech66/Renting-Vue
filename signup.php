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
$image=$_FILES['image'];

if (isset($_FILES["image"]["name"])) {

    $name = $_FILES["image"]["name"];
    $tmp_name = $_FILES['image']['tmp_name'];
    $image = basename($_FILES['image']['name']);
    $error = $_FILES['image']['error'];

    if (!empty($name)) {
        $location = 'uploads/';

        if  (move_uploaded_file($tmp_name, $location.$name)){
            echo 'Uploaded';
        }

    } else {
        echo 'please choose a file';
    }
}
    $sql = mysqli_query($conn, "INSERT INTO `register` (`model`,`no`,`time1`, `time2`, `fare`, `address`, `image`, `descr`) VALUES ('$model','$no','$time1', '$time2', '$fare', '$address', '$name', '$descr')") or die(mysqli_error());

  $result=mysqli_query($conn,$sql);

  if($result)
  {
    echo "Registation Successfully";
    // header("refresh:01;url=try2.html");
  }
  else
  {
    echo "Registation Unsuccessfully";
    // header("refresh:01;url=try2.html");
  }
?>