<?php

include "dbConn.php"; // Using database connection file here

$user = $_GET['user']; // get id through query string

$del = mysqli_query($db,"delete from `payment` where user = '$user'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:deletepayment.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>