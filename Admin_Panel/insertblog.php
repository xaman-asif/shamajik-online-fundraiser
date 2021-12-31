<!-- <?php

    $con = mysqli_connect("localhost", "root", "", "shamajik") or die("Unable to Connection");

    $uname = mysqli_real_escape_string($con , $_POST['uname']);
    $blogid = mysqli_real_escape_string($con , $_POST['blogid']);
    $loved = mysqli_real_escape_string($con , $_POST['loved']);
    $title = mysqli_real_escape_string($con , $_POST['title']);
    $descr = mysqli_real_escape_string($con , $_POST['descr']);
    $publish = mysqli_real_escape_string($con , $_POST['publish']);
    $image = mysqli_real_escape_string($con , $_POST['image']);

    $sql    = "INSERT INTO `blogs`(`username`, `blog_ID`, `loved`, `title`, `descr`, `publish`, `image`) VALUES ('$uname','$blogid','$loved','$title','$descr','$publish','$image')";
    
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo 'Data insert Successful';
    }else{
        echo 'Data insert fail';
    }

?> -->

<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'shamajik');

if(isset($_POST['insertblog']))
{
    $username = $_POST['username'];
    $blog_ID = $_POST['blog_ID'];
    $loved = $_POST['loved'];
    $title = $_POST['title'];
    $descr = $_POST['descr'];
    $publish = $_POST['publish'];
    $image = $_POST['image'];

    $query = "INSERT INTO `blogs`(`username`, `blog_ID`, `loved`, `title`, `descr`, `publish`, `image`) VALUES ('$uname','$blogid','$loved','$title','$descr','$publish','$image')";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: addblog.php');
    }
    else
    {
        echo '<script> alert("Data not Saved"); </script>';
    }
}

?>