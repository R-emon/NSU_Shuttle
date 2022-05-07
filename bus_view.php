<!-- Author: Rabiul Islam Emon -->

<!DOCTYPE html>
<html>
    <head>
        <tittle>
        </tittle>
    </head>

<body>
    <h2>Bus Info</h2>

    <table>
        <tr>
        <th>Bus_ID</th>
        <th>Name</th>
        <th>Registration_No</th>
        <th>Driver_ID</th>
        </tr>

    <?php

    $db = mysqli_connect("localhost","root","","nsu_shuttle");

    if(!$db)
    {
        die("Connection error: " .mysqli_connect_error());
    }

    $sql = "SELECT * FROM bus";

 $result = mysqli_query($db, $sql);

 if(mysqli_num_rows($result)>0)
 { 
     while($row = mysqli_fetch_assoc($result))
     { 
         ?>
         <tr>
            <td><?php echo $row['Bus_ID']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Registration_No']; ?></td>
            <td><?php echo $row['Driver_ID']; ?></td>
        </tr>
        <?php
     }
   
 }

    ?>
    </table>

</body>





</html>