<!-- Author: Md. Redwan-ul-islam Rashik -->
<?php

    $servernanme= "localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "nsu_shuttle";

    $con = mysqli_connect($servernanme, $dBUsername, $dBPassword, $dBName);

    if(!$con){
        die("Connection Failed: ".mysqli_connect_error());
    }
    
    ?>