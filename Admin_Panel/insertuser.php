<?php

    $con = mysqli_connect("localhost", "root", "", "shamajik") or die("Unable to Connection");

    $uname = mysqli_real_escape_string($con , $_POST['uname']);
    $urole = mysqli_real_escape_string($con , $_POST['urole']);
    $raised = mysqli_real_escape_string($con , $_POST['raised']);
    $funded = mysqli_real_escape_string($con , $_POST['funded']);
    $fname = mysqli_real_escape_string($con , $_POST['fname']);
    $contact = mysqli_real_escape_string($con , $_POST['contact']);
    $location = mysqli_real_escape_string($con , $_POST['location']);

    $sql    = "INSERT INTO `userinfo`(`username`, `userrole`, `raised`, `funded`, `fullname`, `contact`, `location`) VALUES ('$uname','$urole','$raised','$funded','$fname','$contact','$location')";
    
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo 'Data insert Successful';
    }else{
        echo 'Data insert fail';
    }

?>