<?php

$db = mysqli_connect("localhost","root","","shamajik");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>