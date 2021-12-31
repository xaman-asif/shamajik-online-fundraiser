<?php
print_r($_POST);
session_start();
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {

  if (isset($_POST['username']) && isset($_POST['firstname']) && isset($_POST['contact']) && isset($_POST['location']) && isset($_POST['amount']) && isset($_POST['account']) && isset($_POST['method']) && isset($_POST['postID'])) {
    //print_r($_POST);
    $uname = $_POST['username'];
    $amount = $_POST['amount'];
    $postID = $_POST['postID'];
    $type = $_POST['method'];
    $acc = $_POST['account'];
    $conn = mysqli_connect("localhost", "root", "", "SHAMAJIK");

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } else {
      $sql = "INSERT INTO `payment`(`user`, `post`, `type`, `amount`, `donatedOn`, `remark`) VALUES ('$uname','$postID','$type','$amount',CURRENT_TIMESTAMP,'$acc')";

      //echo "<br>";
      //echo $sql;

      if ($conn->query($sql)) {
        $sql1 = "UPDATE `posts` SET `totalDonors`=(SELECT COUNT(DISTINCT user) AS donators FROM payment WHERE payment.post= $postID ) WHERE postID = $postID";
        $sql2 = "UPDATE `posts` SET `fundRaised`=(SELECT SUM(amount) FROM payment WHERE post=$postID) WHERE postID=$postID";
        //echo $sql1;
        $conn->query($sql1);
        $conn->query($sql2);
        //$row1 = $result1->fetch_assoc();
        //print_r($row1);
?>
        <script>
          window.location.assign('view_post.php?postID=<?php echo $postID; ?>');
          window.alert('Your Donation was successful');
        </script>
<?php } else {
        echo "<script>
                //window.alert('Something went wrong. Please try again.');
                //window.location.assign('add_post.php');
                </script>";
        echo mysqli_error($conn);
      }
    }
  }
}
?>