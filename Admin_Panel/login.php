<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <img src="https://png.pngtree.com/png-vector/20191003/ourmid/pngtree-user-login-or-authenticate-icon-on-gray-background-flat-icon-ve-png-image_1786166.jpg">
        <form method="POST" action="">
            <div class="form-input">
                <input type="text" name="username" placeholder="Username" autofocus />
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" name="submit" value="LOGIN" class="btn-login" />
            <!--<a href="Admin_Panel/loginadmin.php">Login as admin</a>-->
            <input type="submit" name="admin" value="ADMIN" class="btn-login">
            <br>
            <br>
            <a href="signup_user.php">Don't have any account?</a>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "SHAMAJIK";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } else {
                $uname = $_POST['username'];
                $password = $_POST['password'];
                $sql = "SELECT * FROM `userCredential` WHERE user = '$uname' AND pass = SHA2('$password', 224)";
                if ($result = $conn->query($sql)) {
                    if ($result->num_rows) {
                        session_start();
                        $_SESSION['username'] = $uname;
                        echo "<script>
                        window.location.assign('index.php');
                        </script>";
                    } else {
                        echo "<p>You have entered incorrect password. Try again.</p>";
                    }
                } else {
                    die($conn->error);
                }
            }
        } else if (isset($_POST['admin'])) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "SHAMAJIK";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } else {
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $sql = "SELECT * FROM `adminCredential` WHERE user = '$user' AND pass = '$pass'";
                //echo $sql;
                if ($result = $conn->query($sql)) {
                    if ($result->num_rows) {
                        session_start();
                        $_SESSION['adminname'] = $user;
                        echo "<script>
                        window.location.assign('index.php');
                        </script>";
                    } else {
                        echo "<p>You have entered incorrect password. Try again.</p>";
                    }
                } else {
                    die($conn->error);
                }
            }
        }
        ?>
    </div>
</body>

</html>