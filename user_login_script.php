<!-- Author: Rabiul Islam Emon -->

<?php

$servernanme= "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "nsu_shuttle";

$con = mysqli_connect($servernanme, $dBUsername, $dBPassword, $dBName);

$id = $_POST['id'];
$password = $_POST['password'];

if ($id == null) {
    die('Invalid ID');
}

$sql = "SELECT * FROM user WHERE User_ID='$id' LIMIT 1";
$result = $con->query($sql);

$user = $result->fetch_assoc();

?>