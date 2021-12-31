<?php
//print_r($_POST);

$username = $_POST['username'];
$blogid = $_POST['blogid'];
$loved = $_POST['loved'];
$title = $_POST['title'];
$descr = $_POST['descr'];
$user = $_POST['username'];
$pass = $_POST['userpassword'];

//echo $name . $phone . $email . $location . $username . $password;

$servername = "localhost";
$uname = "root";
$password = "";
$dbname = "shamajik";

$sql = "INSERT INTO `blogs`(`username`, `blogid`, `loved`, `title`, `descr`)
    VALUES ('$username','$blogid','$loved','$title','$descr')";

$conn = new mysqli($servername, $uname, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    if ($result = $conn->query($sql)) {
        echo " You Have Successfully Logged in";
        $sql0 = "INSERT INTO `userCredential`(`username`, `password`) VALUES ('$user','$pass')";
        $conn->query($sql0);
        echo "Successfully Created Admin Account";
        echo "<script>
            window.alert('Add blog successful');
            window.location.assign('index.php');
        </script>";
    } else {
        die($conn->error);
    }
}
