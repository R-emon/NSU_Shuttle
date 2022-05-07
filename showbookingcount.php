<!-- Author: Rabiul Islam Emon -->

<?php

$db = mysqli_connect("localhost","root","","nsu_shuttle");

if(!$db)
{
    die("Connection error: " .mysqli_connect_error());
}
else
{
    echo "Connection Success" . "<br>";
}

$id = $_POST['Name'];
$ts = $_POST['time_slot'];
$way = $_POST['Way'];
$date = $_POST['Date'];

$sql = "SELECT Booking_ID FROM bookings Where Route_ID = $id AND Way = '$way' AND Time_Slot = '$ts' AND Date = '$date'";

if ($result=mysqli_query($db,$sql)) {
    $count=mysqli_num_rows($result);
    echo "The total number passengers are: ".$count; 
}

?>
