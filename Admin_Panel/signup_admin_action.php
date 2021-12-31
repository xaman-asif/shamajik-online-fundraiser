<?php
//print_r($_POST);

$name = $_POST['fullname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$location = $_POST['location'];
$user = $_POST['adminID'];
$pass = $_POST['adminpassword'];

//echo $name . $phone . $email . $location . $username . $password;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SHAMAJIK";

$sql = "INSERT INTO `admins`(`admin_id`, `fullname`, `phone`, `email`, `location`)
    VALUES ('$user','$name','$phone','$email','$location')";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    if ($result = $conn->query($sql)) {
        //echo " You Have Successfully Logged in";
        $sql0 = "INSERT INTO `adminCredential`(`user`, `pass`) VALUES ('$user','$pass')";
        $conn->query($sql0);
        echo "Successfully Created Admin Account";
        echo "<script>
            window.alert('Sign up as admin successful');
            window.location.assign('index.php');
        </script>";
    } else {
        die($conn->error);
    }
}
