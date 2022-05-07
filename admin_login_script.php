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
    
    $sql = "SELECT * FROM admin WHERE Admin_ID='$id' LIMIT 1";
    $result = $con->query($sql);
    $user = $result->fetch_assoc();

    if ($password == $user['Password']) {
        echo '
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link rel="stylesheet" href="CSS/adminAC.css">
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
                        <a href="http://localhost/NSU_Shuttle/userlogin.html">User Login</a>
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
        </div> 
    </section>
    <hr>
    <!--Navigation bar ends-->

    <div class="page">

    <!--Welcome bar-->
    <div class="block1">
    <h1><strong>Welcome '.$user['Name'].'!</strong></h1>
    </div>

    <div class="monitoring">
        <h1><strong>DASHBOARD:</strong> (Page Navigation)</h1>
        <ul>
            <li><h4><a href="#Bus">Bus</a></h4></li>
            <li><h4><a href="#Driver">Driver</a></h4></li>
            <li><h4><a href="#Routes">Routes and Stoppages</a></h4></li>
            <li><h4><a href="#Bookings">Bookings</a></h4></li>
        </ul>
    </div>

    <br>

    <!--Forms begin-->
    <div class="all_forms">
    <div class="form-1">
        <br>

        <h2 id="Bus"><strong>Do you want to make any changes to <strong>Bus</strong> info?</strong></h2>

        <div>
             <form action="bus_add.php" method="POST">
            <h3>Add new Bus Info:</h3>
            <label>Bus ID</label>
            <input type="number" name="Bus_ID" placeholder="Enter Bus ID">

            <label>Vehicle Name</label>
            <input type="name" name="Name" placeholder="Enter the name">

            <label>Registration Number</label>
            <input type="text" name="Registration_No" placeholder="Enter the Number">

            <button type="submit" value="Submit">ADD</button>
            <button type="reset">Reset</button>
            </form>

        </div>

        <div>
             <form action="bus_update.php" method="POST">
            <h3>Update Bus Info:</h3>
            <label>Bus ID</label>
            <input type="number" name="Bus_ID" placeholder="Enter Bus ID">

           <label>Driver ID</label>
            <input type="number" name="driver_ID" placeholder="Enter the ID">

            <button type="submit" value="Submit">Update</button>
            <button type="reset">Reset</button>
            </form>
        </div>

        <div>
             <form action="bus_remove.php" method="POST">
            <h3>Remove Bus Info:</h3>
            <label>Bus ID</label>
            <input type="number" name="Bus_ID" placeholder="Enter Bus ID">

            <button type="submit" value="Submit">Remove</button>
            <button type="reset">Reset</button>
            </form>
        </div>

        <br>
        <div>
        <form action="bus_view.php">
            <button type="submit" value="Submit">View All</button>            
        </form>
        </div>
        
            <div class="clearfix"></div>                        
    </div><!-- Form-1 ends-->

        <br>

        <div class="form-2">
            <br>
            <h2 id="Driver">Do you want to make any changes to <strong>Driver</strong> info?</h2>
        <div>
            <form action="driver_add.php" method="POST">
            <h3>Add new Driver:</h3>
            <label>Driver ID</label>
            <input type="number" name="driver_ID" placeholder="Enter the ID">

            <label>Driver\'s Name</label>
            <input type="name" name="Name" placeholder="Enter the name">

            <label>Phone Number</label>
            <input type="number" name="Phone" placeholder="Enter the number">

            <button type="submit" value="Submit">ADD</button>
            <button type="reset">Reset</button>
            </form>
        </div>

        <div>
            <form action="driver_update.php" method="POST">
            <h3>Update Driver Info:</h3>
            <label>Driver ID</label>
            <input type="number" name="driver_ID" placeholder="Enter the ID">

            <label>Bus ID</label>
            <input type="number" name="bus_ID" placeholder="Enter the ID">

            <button type="submit" value="Submit">Update</button>
            <button type="reset">Reset</button>
            </form>
        </div>


        <div>
            <form action="driver_remove.php" method="POST">
            <h3>Remove Driver Info:</h3>
            <label>Driver ID</label>
            <input type="number" name="driver_ID" placeholder="Enter the ID">
            <button type="submit" value="Submit">Remove</button>
            <button type="reset">Reset</button>
            </form>
        </div>
        <br>
        <div>
        <form action="driver_view.php">
            <button type="submit" value="Submit">View All</button>            
        </form>
        </div>

            <div class="clearfix"></div>
                        
    </div><!-- Form-2 ends-->

      <br>

    <div class="form-3">
                <br>
            <h2 id="Routes">Do you want to make any changes to <strong>Routes</strong> info?</h2>

        <div class="routes">
            <div>
            <form action="route_add.php" method="POST">
            <h3>Add new Route:</h3>

            <label>Route ID</label>
            <input type="number" name="Route_ID" placeholder="Enter the ID">

            <label>Route Name</label>
            <input type="name" name="Name" placeholder="Enter the name">
            <button type="submit" value="Submit">ADD</button>
            <button type="reset">Reset</button>
            </form>
        </div>

        

        <div>
            <form action="route_remove.php" method="POST">
            <h3>Delete Route:</h3>
            <label>Route ID</label>
            <input type="number" name="Route_ID" placeholder="Enter the ID">
            <button type="submit" value="Submit">Remove</button>
            <button type="reset">Reset</button>
            </form>
        </div>
        </div>

        <br>
        <div>
        <form action="routes_view.php">
            <button type="submit" value="Submit">View All</button>            
        </form>
        </div>

        <br>
            <h2>Do you want to make any changes to <strong>Stoppages</strong> info?</h2>

        <div class="Stoppages">
        <div>
        <form action="stoppages_add.php" method="POST">
            <h3>Add new Stoppage:</h3>

            <label>Route ID</label>
            <input type="number" name="Route_ID" placeholder="Enter the ID">

            <label>Stoppage Name</label>
            <input type="name" name="Name" placeholder="Enter the name">
            <button type="submit" value="Submit">ADD</button>
            <button type="reset">Reset</button>
        </form>
        </div>

        <div>
        <form action="stoppages_rem.php" method="POST">
            <h3>Delete Stoppage:</h3>
            <label>Stoppage Name</label>
            <input type="name" name="Name" placeholder="Enter the name">
            <button type="submit" value="Submit">Remove</button>
            <button type="reset">Reset</button>
        </form>
        </div>

        <br>
        <div>
        <form action="stoppages_view.php">
            <button type="submit" value="Submit">View All</button>            
        </form>
        </div>

        </div>

            <div class="clearfix"></div>
                        
    </div><!-- Form-3 ends-->

    <br>

    <div class="form-4">
            <form action="showbookingcount.php" method="POST">
                <br>
            <h2 id="Bookings"><strong>Bookings</strong> List</h2>
            
            <h3>To  check number of bookings:</h3>
            <label>Date</label>
            <input type="date" name="Date">

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

            <label>Way</label>
			<select name="Way">
			<option value="" disabled selected hidden>Select an option</option>
			<option value="Arrival">Arrival</option>
			<option value="Departure">Departure</option>
			</select>
    

            <label>Route ID</label>
            <input type="name" name="Name" placeholder="Enter the Route ID">


            <button type="submit" value="Submit">Search</button>
            <button type="reset">Reset</button>

            </form>

            <form action="assign_bus.php" method="POST">
                <br>
            
            <h3>To assign bus:</h3>
            <label>Date</label>
            <input type="date" name="Date">

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

            <label>Way</label>
			<select name="Way">
			<option value="" disabled selected hidden>Select an option</option>
			<option value="Arrival">Arrival</option>
			<option value="Departure">Departure</option>
			</select>
    

            <label>Route ID</label>
            <input type="name" name="Name" placeholder="Enter the Route ID">

            <label>Bus ID</label>
            <input type="name" name="Bus" placeholder="Enter the Bus ID">


            <button type="submit" value="Submit">Assign</button>
            <button type="reset">Reset</button>

            </form>


            <br>
            <div>
            <form action="booking_view.php">
            <button type="submit" value="Submit">View All</button>            
            </form>
            </div>

        <div class="clearfix"></div>

        </div>
            
                        
    </div><!-- Form-4 ends-->



    </div><!--all forms-->
        
        </div><!--page-->
        <br>


    <!--Footer begins-->
    <hr>
    <div class="footer">
    <section class="Footer"> 
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Tech Company</a> Maintained By <a href="http://www.northsouth.edu/resources/it-resource-center.html">NSU IT</a></p>
        </div> 
    </section>
    </div>
    <!--Footer ends-->

</body>
</html>
        ';
    } else {
        echo 'Invalid credentials';
    }
?>