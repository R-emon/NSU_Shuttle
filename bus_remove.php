<!-- Author: Sumaiya Sabrin Mouri -->

<?php 

$db = mysqli_connect("localhost","root","","nsu_shuttle");

if(!$db)
{
    die("Connection error: " .mysqli_connect_error());
}

    $id = $_POST['Bus_ID'];
 
    $sql1 = "UPDATE driver SET Bus_ID = NULL WHERE Bus_ID = '$id'";
    $sql2= "DELETE FROM bus WHERE bus_ID ='$id'";  
 
if(mysqli_query($db,$sql1) && mysqli_query($db,$sql2))
{ 
   echo "Bus Removed.";
}
    else
  {
    echo "There is an error: " . mysqli_error($db);
  } 
?>