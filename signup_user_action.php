<?php
if (isset($_POST['fullname']) && isset($_POST['contact']) && isset($_POST['Role']) && isset($_POST['location']) && isset($_POST['username']) && isset($_POST['password'])) {
    $fname = $_POST['fullname'];
    $phone = $_POST['contact'];
    $role = $_POST['Role'];
    $location = $_POST['location'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = mysqli_connect("localhost", "root", "", "SHAMAJIK");

    if ($conn->connect_error) {
        die("Connection falied: " . $conn->connect_error);
    } else {
        $sql = "INSERT INTO `userInfo` (`username`, `userrole`, `verified`, `raised`, `funded`, `fullname`, `contact`, `location`) VALUES ('$username', '$role', '0', '0', '0', '$fname', '$phone', '$location');";

        $sql1 = "INSERT INTO `userCredential` (`user`, `pass`) VALUES ('$username',SHA2('$password', 224))";
        if (!$conn->query($sql)) {
            echo "
                    <script>
                        window.alert('Username Exists. Try another one.');
                        window.location.assign('signup_user.php');
                    </script>
                ";
        }
        if ($conn->query($sql1)) {
            echo "<script>
                    window.alert('User Created. You can log in now');
                    window.location.assign('login.php');
                </script>";
        }
    }
}
