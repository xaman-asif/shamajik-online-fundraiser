<?php
session_start();
unset($_SESSION['username']);
session_destroy();

echo "<script>window.location.assign('index.php');</script>";
?>