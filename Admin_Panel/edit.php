<?php

include "dbConn.php"; // Using database connection file here

$username = $_GET['username']; // get id through query string

$qry = mysqli_query($db,"select * from `uesrinfo` where username='$username'"); // select query

//$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['Edit'])) // when click on Update button
{
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
	
    $edit = mysqli_query($db,"update `userinfo` set fullname='$fullname', age='$age' where id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:updateuser.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($db);
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="fullname" placeholder="Enter Full Name" Required>
  <input type="text" name="age" placeholder="Enter Age" Required>
  <input type="submit" name="update" value="Update">
</form>