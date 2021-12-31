<?php
//print_r($_POST);

$comment_ID = $_POST['comment_ID'];
$username = $_POST['username'];
$postID = $_POST['postID'];
$publish = $_POST['publish'];
$cmnttext = $_POST['cmnttext'];
//$user = $_POST['username'];
//$pass = $_POST['password'];

//echo $name . $phone . $email . $location . $username . $password;

$servername = "localhost";
$uname = "root";
$password = "";
$dbname = "shamajik";

$sql = "INSERT INTO `comments`(`comment_ID`, `username`, `postID`, `publish`, `cmnttext`)
    VALUES ('$comment_ID','$username','$postID','$publish','$cmnttext')";

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
            window.alert('Add comment successful');
            window.location.assign('index.php');
        </script>";
    } else {
        die($conn->error);
    }
}
