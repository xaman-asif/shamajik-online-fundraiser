<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'shamajik');

if(isset($_POST['deletedata']))
{   
    $id = $_POST['delete_id'];


    $query = "DELETE FROM `userinfo` WHERE 0 ";                                
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo '<script> alert("Data deleted"); </script>';
        header('Location: deleteuser.php');
    }
    else
    {
        echo '<script> alert("Data not Deleted"); </script>';
    }
}

?>