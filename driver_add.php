<!-- Author: Md. Redwan-ul-islam Rashik  -->

<?php 

$db = mysqli_connect("localhost","root","","nsu_shuttle");

if(!$db)
{
    die("Connection error: " .mysqli_connect_error());
}

    $id = $_POST['driver_ID'];
    $name= $_POST['Name'];
    $ph = $_POST['Phone'];

 

$sql = "INSERT INTO driver(driver_ID, Name, Phone)  VALUES ($id, '$name', '$ph')";  
 
if(mysqli_query($db,$sql))
{ 
   echo "New Driver Added.";
}
    else
  {
    echo "There is an error: " . mysqli_error($db);
  } 

?>