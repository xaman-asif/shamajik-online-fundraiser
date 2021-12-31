<?php

$username = $_POST['username'];
$userrole = $_POST['userrole'];
$raised = $_POST['raised'];
$funded = $_POST['funded'];
$fullname = $_POST['fullname'];
$contact = $_POST['contact'];
$location = $_POST['location'];
$user = $_POST['username'];
$pass = $_POST['userpassword'];


$servername = "localhost";
$uname = "root";
$password = "";
$dbname = "shamajik";

$sql = "INSERT INTO `userinfo` (`username`, `userrole`, `raised`, `funded`, `fullname`, `contact`, `location`)
    VALUES ('$username','$userrole','$raised','$funded','$fullname','$contact','$location')";

$conn = new mysqli($servername, $uname, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    if ($result = $conn->query($sql)) {
        //echo " You Have Successfully Logged in";
        $sql0 = "INSERT INTO `userCredential`(`username`, `password`) VALUES ('$user','$pass')";
        $conn->query($sql0);
        echo "Successfully Created Admin Account";
        echo "<script>
            window.alert('Add user successful');
            window.location.assign('index.php');
        </script>";
    } else {
        die($conn->error);
    }
}
