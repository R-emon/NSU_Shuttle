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

if ($password == $user['Password']) {
    echo '
<!DOCTYPE html>
<html>
<head>
<title>User Page</title>
 <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="CSS/proj_style.css">
<link rel="icon" href="images/NSU Shuttle icon.png">
</head>

<body>
 <!--Navigation bar-->
<section class="navigation-bar">
    <div class="container">
        <div class="logo">
            <img src="images/NSU Shuttle Logo.png" alt="logo" class="img-responsive">
        </div>
        <div class="nav_menu_block">
        <div class="menu text-right">
            <ul>
                <li>
                    <a href="http://localhost/NSU_Shuttle/Homepage.html">Home</a>
                </li>
                <li>
                    <a href="http://localhost/NSU_Shuttle/adminlogin.html">Admin Login</a>
                </li>
                <li>
                    <a href="http://localhost/NSU_Shuttle/contact.html">Contact</a>
                </li>
                <li>
                    <a href="http://localhost/NSU_Shuttle/about.html">About</a>
                </li>
                <li>
                    <a href="http://localhost/NSU_Shuttle/faq.html">FAQ</a>
                </li>
                <li>
                    <button type="button"> <a href="http://localhost/NSU_Shuttle/Homepage.html">Log Out</a>
                    </button></li>
            </ul>
        </div>
    </div>
        <div class="clearfix">

        </div>
    </div> 
</section>
<hr>
<!--Navigation bar ends-->

<div class="page">
<div class="block">
<h1><strong>Welcome '.$user['Name'].'!</strong></h1>
</div>

<div class="category">
    <h3>DASHBOARD</h3>    	

    <h4>See your preffered route ID</h4>
    <form action="stoppages_view.php">
        <button type="submit" value="Submit">View</button>            
        </form>

    
</div>
<div class="clearfix"></div>
<br>
<div class="form">
<p><h3>If you want to book a travel, please fill in the form below: </h3>
    <br>
<form action="booking_script.php" method="POST">
    <div>
        <label>User ID</label>
        <input type="number" name="ID" placeholder="Enter your ID">
    </div>
    <br>

    <div>
        <label>Time Slot</label>
        <select name="time_slot">
        <option value="" disabled selected hidden>Select a Slot</option>
        <option value="8:00AM">8:00AM</option>
        <option value="9:40AM">9:40AM</option>
        <option value="11:20AM">11:20AM</option>
        <option value="12:50PM">12:50PM</option>
        <option value="2:40PM">2:40PM</option>
        <option value="4:10PM">4:10PM</option>
        </select>

    </div>
    <br>
    <div>
        <label>Way</label>
        <select name="Way">
        <option value="" disabled selected hidden>Select an option</option>
        <option value="Arrival">Arrival</option>
        <option value="Departure">Departure</option>
        </select>

    </div>
    <br>
    <div>
        <label>Date</label>
        <input type="date" name="Date">	
    </div>
    <br>
    <div>
        <label>Route ID</label>
        <input type="number" name="route_id" placeholder="Enter the route ID">
    </div>
        
    
    <br>
    <div class="buttons">
    <button type="submit" value="Submit">Confirm Booking</button>
    <button type="reset">Reset</button>
    </div>
    <br>
</div>
    

    
</form>
</p>
</div>
</p>
</div>
<hr>

<div class="clearfix"></div>

<!--Footer starts-->
<div class="footer">
<section class="Footer"> 
    <div class="container text-center">
        <p>All rights reserved. Designed By <a href="#">Tech Company</a> Maintained By <a href="http://www.northsouth.edu/resources/it-resource-center.html">NSU IT</a></p>
    </div> 
</section>
</div>
<!--Footer ends-->
</div>

</body>
</html>
    ';
} else {
    echo 'Invalid credentials';
}

?>