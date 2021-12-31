<?php
/*
session_start();
echo $_SESSION['adminname'];
echo $_GET['postID'];
echo $_GET['verification'];
*/
session_start();
if (isset($_SESSION['adminname']) && !empty($_SESSION['adminname'])) {
    //echo $_SESSION['adminname'];
    //echo $_GET['postID'];
    //echo $_GET['verification'];

    $post = $_GET['postID'];
    $veri = $_GET['verification'];

    $conn = mysqli_connect("localhost", "root", "", "SHAMAJIK");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        //$sql = "INSERT INTO `posts` (`user`, `title`, `descr`, `fundNeeded`, `location`, `catagory`, `enddate`, `image`) VALUES ('$user', '$title', '$description', '$fundneeded', '$location', '$catagory', '$enddate', 'images/$rand.jpg')";
        $sql = "UPDATE `posts` SET `verified` = '$veri' WHERE `posts`.`postID` = $post;";
        //echo $sql;
        if ($conn->query($sql)) {
            echo "<script>
                window.location.assign('verification.php');
                window.alert('Post has been verified.');
                </script>";
        } else {
            //echo "<script>
                //window.alert('Something went wrong. Please try again.');
                //window.location.assign('add_post.php');
            //    </script>";
            echo mysqli_error($conn);
        }
    }
} else {
    echo "
    <script>
        window.alert('Admin must log in.');
        window.location.assign('login.php');
    </script>";
}
