<?<php>

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





</php>