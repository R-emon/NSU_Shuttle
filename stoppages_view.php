<!-- Author: Rabiul Islam Emon -->

<!DOCTYPE html>
<html>
    <head>
        <tittle>
        </tittle>
    </head>

<body>
    <h2>Stoppage Info</h2>

    <table>
        <tr>
        <th>Route_ID</th>
        <th>Name</th>
        </tr>

    <?php

    $db = mysqli_connect("localhost","root","","nsu_shuttle");

    if(!$db)
    {
        die("Connection error: " .mysqli_connect_error());
    }

    $sql = "SELECT * FROM stoppages";

 $result = mysqli_query($db, $sql);

 if(mysqli_num_rows($result)>0)
 { 
     while($row = mysqli_fetch_assoc($result))
     { 
         ?>
         <tr>
            <td><?php echo $row['Route_ID']; ?></td>
            <td><?php echo $row['Name']; ?></td>
        </tr>
        <?php
     }
   
 }

    ?>
    </table>

</body>
</html>