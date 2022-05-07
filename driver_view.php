<!-- Author: Md. Redwan-ul-islam Rashik  -->

<!DOCTYPE html>
<html>
    <head>
        <tittle>
        </tittle>
    </head>

<body>
    <h2>Driver Info</h2>

    <table>
        <tr>
        <th>Driver_ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Bus_ID</th>
        </tr>

    <?php

    $db = mysqli_connect("localhost","root","","nsu_shuttle");

    if(!$db)
    {
        die("Connection error: " .mysqli_connect_error());
    }

    $sql = "SELECT * FROM driver";

 $result = mysqli_query($db, $sql);

 if(mysqli_num_rows($result)>0)
 { 
     while($row = mysqli_fetch_assoc($result))
     { 
         ?>
         <tr>
            <td><?php echo $row['Driver_ID']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Phone']; ?></td>
            <td><?php echo $row['Bus_ID']; ?></td>
        </tr>
        <?php
     }
   
 }

    ?>
    </table>

</body>

</html>