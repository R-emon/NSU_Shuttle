<!-- Author: Rabiul Islam Emon -->

<?php 

$db = mysqli_connect("localhost","root","","nsu_shuttle");

if(!$db)
{
    die("Connection error: " .mysqli_connect_error());
}

    $id = $_POST['Route_ID'];
    $name= $_POST['Name'];

 

$sql = "INSERT INTO stoppages(Route_ID,Name)  VALUES ($id, '$name')";  
 
if(mysqli_query($db,$sql))
{ 
   echo "New Stoppage Added.";
}
    else
  {
    echo "There is an error: " . mysqli_error($db);
  } 



?>