<!-- Author: Md. Redwan-ul-islam Rashik  -->
<?php
$id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    $servernanme= "localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "nsu_shuttle";

    $con = mysqli_connect($servernanme, $dBUsername, $dBPassword, $dBName);

?>