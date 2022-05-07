<!-- Author: Rabiul Islam Emon -->

<?php 

$db = mysqli_connect("localhost","root","","nsu_shuttle");

if(!$db)
{
    die("Connection error: " .mysqli_connect_error());
}

    $id = $_POST['driver_ID'];
 
    $sql1 = "UPDATE bus SET Driver_ID = NULL WHERE Driver_ID = '$id'";
    $sql2= "DELETE FROM driver WHERE driver_ID ='$id'";  
 
if(mysqli_query($db,$sql1) && mysqli_query($db,$sql2))
{ 
   echo "Driver Removed.";
}
    else
  {
    echo "There is an error: " . mysqli_error($db);
  } 
?>