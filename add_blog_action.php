<?php
session_start();
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    if (isset($_POST['title']) && isset($_POST['description'])) {
        $user = $_SESSION['username'];
        $title = addslashes($_POST['title']);
        $descr = addslashes($_POST['description']);
        $rand = $_SESSION['username'] . "-blog#" . rand(1000, 9999);

        if ($_FILES["pimage"]["size"] != 0) {
            $temp = $_FILES['pimage'];
            $path = "images/$rand.jpg";
            move_uploaded_file($temp['tmp_name'], $path);
        } else {
            $path = NULL;
        }

        $conn = mysqli_connect("localhost", "root", "", "SHAMAJIK");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            $sql = "INSERT INTO `blogs` (`username`, `loved`, `title`, `descr`, `publish`, `image`) VALUES ('$user', '0', '$title', '$descr', CURRENT_TIMESTAMP(), '$path');";
            if ($conn->query($sql)) {
                $_POST = NULL;
                echo "<script>
                window.location.assign('blog_posts.php');
                window.alert('Your Post Successful');
                </script>";
            } else {
                echo "<script>
                window.alert('Something went wrong. Please try again.');
                window.location.assign('add_blog.php');
                </script>";
            }
        }
    }
}
