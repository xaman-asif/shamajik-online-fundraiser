<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SHAMAJIK";
//Creating connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $uname = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `forminfo` WHERE User = '$uname' AND Password = '$password' LIMIT 1";
    if ($result = $conn->query($sql)) {
        if ($result->num_rows) {
            echo " You Have Successfully Logged in";
        } else {
            echo " You Have Entered Incorrect Password";
        }
    } else {
        die($conn->error);
    }
}
