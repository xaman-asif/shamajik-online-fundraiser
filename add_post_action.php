<?php
session_start();
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['fundNeeded']) && isset($_POST['endDate']) && isset($_POST['location']) && isset($_POST['catagory'])) {
        $user = $_SESSION['username'];
        $title = addslashes($_POST['title']);
        $description = addslashes($_POST['description']);
        $fundneeded = $_POST['fundNeeded'];
        $enddate = $_POST['endDate'];
        $location = $_POST['location'];
        $catagory = $_POST['catagory'];
        $rand = $_SESSION['username'] . "#" . rand(1000, 9999);
        if ($_FILES["pimage"]["size"] != 0) {
            $temp = $_FILES['pimage'];
            move_uploaded_file($temp['tmp_name'], "images/$rand.jpg");
        }
        $conn = mysqli_connect("localhost", "root", "", "SHAMAJIK");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            $sql = "INSERT INTO `posts` (`user`, `title`, `descr`, `fundNeeded`, `location`, `catagory`, `enddate`, `image`) VALUES ('$user', '$title', '$description', '$fundneeded', '$location', '$catagory', '$enddate', 'images/$rand.jpg')";
            if ($conn->query($sql)) {
                echo "<script>
                window.location.assign('index.php');
                window.alert('Your Donation Request Posted');
                </script>";
            } else {
                echo "<script>
                //window.alert('Something went wrong. Please try again.');
                //window.location.assign('add_post.php');
                </script>";
                echo mysqli_error($conn);
            }
        }
    }
} else {
    echo "
        <script>
            window.location.assign('login.php');
        </script>";
}
