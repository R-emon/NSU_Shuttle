<!-- Author: Rabiul Islam Emon -->

<!DOCTYPE html>
<html>
    <head>
        <tittle>
        </tittle>
    </head>

<body>
    <h2>Booking Info</h2>

    <table>
        <tr>
        <th>Booking_ID</th>
        <th>User_ID</th>
        <th>Route_ID</th>
        <th>Bus_ID</th>
        <th>Way</th>
        <th>Time_Slot</th>
        <th>Date</th>
        </tr>

    <?php

    $db = mysqli_connect("localhost","root","","nsu_shuttle");

    if(!$db)
    {
        die("Connection error: " .mysqli_connect_error());
    }

    $sql = "SELECT * FROM bookings";

 $result = mysqli_query($db, $sql);

 if(mysqli_num_rows($result)>0)
 { 
     while($row = mysqli_fetch_assoc($result))
     { 
         ?>
         <tr>
            <td><?php echo $row['Booking_ID']; ?></td>
            <td><?php echo $row['User_ID']; ?></td>
            <td><?php echo $row['Route_ID']; ?></td>
            <td><?php echo $row['Bus_ID']; ?></td>
            <td><?php echo $row['Way']; ?></td>
            <td><?php echo $row['Time_Slot']; ?></td>
            <td><?php echo $row['Date']; ?></td>
        </tr>
        <?php
     }
   
 }

    ?>
    </table>

</body>

</html>