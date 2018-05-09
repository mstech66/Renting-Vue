
<?php

include_once "config.php";
include_once "utils.php";

$sql = "SELECT * FROM register";

$result= mysqli_query($conn,$sql);

while ( $row =mysqli_fetch_assoc($result) )
{
	$image =$row['image'];

}

?>