<?php

include "dbConn.php"; // Using database connection file here

$username = $_GET['admin_id']; // get id through query string

$del = mysqli_query($db,"delete from `admins` where admin_id = '$admin_id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:deleteadmin.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>