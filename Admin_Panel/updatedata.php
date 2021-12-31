<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'shamajik');

if(isset($_POST['updatedata']))
{   
    $id = $_POST['update_id'];

    $username = $_POST['username'];
    $userrole = $_POST['userrole'];
    $raised = $_POST['raised'];
    $funded = $_POST['funded'];
    $fullname = $_POST['fullname'];
    $contact = $_POST['contact'];
    $location = $_POST['location'];

    $query = "UPDATE `userinfo` SET username='$username',userrole='$userrole',raised='$raised',funded='$funded',fullname='$fullname',contact='$contact',location='$location' WHERE username='$username' ";                                
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: updateuser.php');
    }
    else
    {
        echo '<script> alert("Data not Saved"); </script>';
    }
}

?>