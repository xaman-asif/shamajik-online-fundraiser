<?php

$db = mysqli_connect("localhost","root","","test1 db");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>