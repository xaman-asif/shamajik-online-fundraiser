<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'shamajik');

if(isset($_POST['insertdata']))
{
    $username = $_POST['username'];
    $userrole = $_POST['userrole'];
    $raised = $_POST['raised'];
    $funded = $_POST['funded'];
    $fullname = $_POST['fullname'];
    $contact = $_POST['contact'];
    $location = $_POST['location'];

    $query = "INSERT INTO `userinfo`(`username`, `userrole`, `raised`, `funded`, `fullname`, `contact`, `location`)
    VALUES ('$username','$userrole','$raised','$funded','$fullname','$contact','$location')";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: addusers.php');
    }
    else
    {
        echo '<script> alert("Data not Saved"); </script>';
    }
}

?>