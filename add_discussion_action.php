<?php
session_start();
require_once('dbconfig.php');
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    if (isset($_POST['user_ID']) && isset($_POST['blog_ID']) && isset($_POST['comment'])) {
        $uid = $_POST['user_ID'];
        $bid = $_POST['blog_ID'];
        $loved = $_POST['loved'];
        $cmn = addslashes($_POST['comment']);
        //echo $uid . $pid . $loved . $cmn;
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_errno) {
            printf("Connect failed: %s\n", $conn->connect_error);
            exit();
        }
        $sql = "INSERT INTO `threads`(`username`, `blog_ID`, `cmnttext`) VALUES ('$uid','$bid','$cmn')";
        //echo $sql;
        if ($conn->query($sql)) {
            $loved = $loved + 10;
            $sql0 = "UPDATE `blogs` SET `loved`=" . $loved . " WHERE blog_ID=" . $bid;
            //echo $sql0;
            $conn->query($sql0);
            echo "<script>
            window.location.assign('view_blog.php?blogID=" . $bid . "');
            window.alert('Your comment has been posted.');
            </script>";
        } else {
            echo "Something went wrong.";
            echo $sql;
        }
    }
}
