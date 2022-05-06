<!-- Author: Sumaiya Sabrin Mouri -->

<?php

$db = mysqli_connect("localhost","root","","nsu_shuttle");

if(!$db)
{
    die("Connection error: " .mysqli_connect_error());
}

    $bid = $_POST['Bus_ID'];
    $did = $_POST['driver_ID'];
    
$sql = "UPDATE bus SET Driver_ID = '$did' WHERE Bus_ID = '$bid'";

if(mysqli_query($db,$sql))
{ 
   echo "Driver Updated";
}
    else
  {
    echo "There is an error: " . mysqli_error($db);
  } 
?>