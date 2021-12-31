<?php

if (isset($_POST['create'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);

    $user_data = 'name='.$name. 'email='.$email;
    
    if(empty($name)) {
        header("Location: ..adduser.php?error=name is required&$user_data");
    }else if (empty($email)) {
        header("Location: ..adduser.php?error=email is required&$user_data");
    }else {
        $sql = "INSERT INTO `user`(name,email) VALUES('$name, $email')";
        // $result = mysqli_query($conn , $sql);

        if($result) {
            echo "success";
        }else {
            header("Location: ..adduser.php?error=unknown error occurred&$user_data");
        }

    }
}

?>