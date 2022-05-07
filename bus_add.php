<!-- Author: Sumaiya Sabrin Mouri -->

<?php 

$db = mysqli_connect("localhost","root","","nsu_shuttle");

if(!$db)
{
    die("Connection error: " .mysqli_connect_error());
}

    $id = $_POST['Bus_ID'];
    $name= $_POST['Name'];
    $rn = $_POST['Registration_No'];

 

$sql = "INSERT INTO bus(Bus_ID, Name, Registration_No)  VALUES ($id, '$name', '$rn')";  
 
if(mysqli_query($db,$sql))
{ 
   echo "New Bus Added.";
}
    else
  {
    echo "There is an error: " . mysqli_error($db);
  } 
?>