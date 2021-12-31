<?php
session_start();
require_once('dbconfig.php');
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    if (isset($_POST['user_ID']) && isset($_POST['post_ID']) && isset($_POST['comment'])) {
        $uid = $_POST['user_ID'];
        $pid = $_POST['post_ID'];
        $cmn = addslashes($_POST['comment']);
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_errno) {
            printf("Connect failed: %s\n", $conn->connect_error);
            exit();
        }
        $sql = "INSERT INTO `comments` (`username`, `postID`, `publish`, `cmnttext`) VALUES ('$uid', '$pid', current_timestamp(), '$cmn');";
        if ($conn->query($sql)) {
            echo "<script>
            window.location.assign('view_post.php?postID=" . $pid . "');
            window.alert('Your comment has been posted.');
            </script>";
        } else {
            echo "Something went wrong.";
            echo $sql;
        }
    }
}
