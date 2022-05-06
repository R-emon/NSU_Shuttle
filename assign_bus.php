<!-- Author: Sumaiya Sabrin Mouri -->

<?php 

$db = mysqli_connect("localhost","root","","nsu_shuttle");

if(!$db)
{
    die("Connection error: " .mysqli_connect_error());
}

$ts = $_POST['time_slot'];
$way = $_POST['Way'];
$date = $_POST['Date'];
$route = $_POST['Name'];
$bus= $_POST['Bus'];
    
$sql = "UPDATE bookings SET Bus_ID = '$bus' WHERE Time_Slot = '$ts' AND Way = '$way' AND Date = '$date' AND Route_ID = '$route'";

if(mysqli_query($db,$sql))
{ 
   echo "Bus Assigned";
}
    else
  {
    echo "There is an error: " . mysqli_error($db);
  } 

?>