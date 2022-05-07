<!-- Author: Rabiul Islam Emon -->

<?php 

$db = mysqli_connect("localhost","root","","nsu_shuttle");

if(!$db)
{
    die("Connection error: " .mysqli_connect_error());
}

    $id = $_POST['Route_ID'];
 
    $sql = "DELETE FROM routes WHERE Route_ID= '$id'";  
 
if(mysqli_query($db,$sql))
{ 
   echo "Route Removed.";
}
    else
  {
    echo "There is an error: " . mysqli_error($db);
  } 
?>