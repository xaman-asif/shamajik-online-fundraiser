<?php

include "dbConn.php"; // Using database connection file here

$username = $_GET['username']; // get id through query string

$del = mysqli_query($db,"delete from `userinfo` where username = '$username'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:deleteuser.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>