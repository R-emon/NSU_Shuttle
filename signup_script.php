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

    if(!$con){
        die("Connection Failed: ".mysqli_connect_error());
    }
    if ($id == null) {
       die("Invalid ID"); 
    }
    if ($name == null) {
       die("Invalid name"); 
    }
    if ($phone == null) {
       die("Invalid phone"); 
    }
    if ($id == null) {
       die("Invalid ID"); 
    }
    if ($password == null) {
       die("Invalid password"); 
    }
    if ($password != $password2) {
        die("Password didn't match");
    }

    $sql = "INSERT INTO user (User_ID, Name, Phone, Address, Password)
    VALUES ('$id', '$name', '$phone', '$address', '$password')";

    if ($con->query($sql) === TRUE) {
    echo "New user created! <br/>";
    echo '<a href="http://localhost/NSU_Shuttle/userlogin.html">Login</a>';
    } else {
    echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();

?>