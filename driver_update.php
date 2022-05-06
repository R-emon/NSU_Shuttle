<!-- Author: Md. Redwan-ul-islam Rashik  -->

<?php

$db = mysqli_connect("localhost","root","","nsu_shuttle");

if(!$db)
{
    die("Connection error: " .mysqli_connect_error());
}

    $bid = $_POST['bus_ID'];
    $did = $_POST['driver_ID'];
    
$sql = "UPDATE driver SET Bus_ID = '$bid' WHERE Driver_ID = '$did'";

if(mysqli_query($db,$sql))
{ 
   echo "Bus Updated";
}
    else
  {
    echo "There is an error: " . mysqli_error($db);
  } 
?>