<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      font-family: Arial;
      font-size: 17px;
      padding: 8px;
    }

    * {
      box-sizing: border-box;
    }

    .row {
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap;
      /* IE10 */
      flex-wrap: wrap;
      margin: 0 -16px;
    }

    .col-25 {
      -ms-flex: 25%;
      /* IE10 */
      flex: 25%;
    }

    .col-50 {
      -ms-flex: 50%;
      /* IE10 */
      flex: 50%;
    }

    .col-75 {
      -ms-flex: 75%;
      /* IE10 */
      flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
      padding: 0 16px;
    }

    .container {
      background-color: #f2f2f2;
      padding: 5px 20px 15px 20px;
      border: 1px solid lightgrey;
      border-radius: 3px;
    }

    input[type=text] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    label {
      margin-bottom: 10px;
      display: block;
    }

    .icon-container {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
    }

    .btn {
      background-color: #04AA6D;
      color: white;
      padding: 12px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
    }

    .btn:hover {
      background-color: #45a049;
    }

    a {
      color: #2196F3;
    }

    hr {
      border: 1px solid lightgrey;
    }

    span.price {
      float: right;
      color: grey;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
      .row {
        flex-direction: column-reverse;
      }

      .col-25 {
        margin-bottom: 20px;
      }
    }

    ::placeholder {
      color: blue;
      font-size: 16px;
      font-family: monospace;
    }

    input[type="text"] {
      font-size: 16px;
      font-family: monospace;
      color: blue;
    }
  </style>
</head>
<?php
session_start();
require_once('dbconfig.php');
$conn = mysqli_connect("localhost", "root", "", "SHAMAJIK");
if ($conn->connect_error) {
  printf("Connect failed: %s\n", $conn->connect_error);
  exit();
} else {
  //echo print_r($_POST);
  $username = $_SESSION['username'];
  $sql = "SELECT * FROM `userInfo` WHERE username = '$username'";
  if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
      $fullname = $row['fullname'];
      $contact = $row['contact'];
      $location = $row['location'];
      $amount = $_POST['Amount'];
      $PID = $_POST['PID'];

?>

      <body>
        <div class="row" style="width: 50%; margin-left:auto; margin-right:auto">
          <div class="col-75">
            <div class="container">
              <form action="payment_post_action.php" method="POST">

                <div class="row">
                  <div class="col-50">
                    <h3>Payment Slip</h3>
                    <input type="hidden" name="username" value="<?php echo $username; ?>">
                    <input readonly type="hidden" name="postID" value="<?php echo $PID; ?>">
                    <label for="fname"><i class="fa fa-user"></i> Fullname</label>
                    <input readonly type="text" id="fname" name="firstname" value="<?php echo $fullname; ?>">
                    <label for="contact"><i class="fa fa-envelope"></i> Contact</label>
                    <input readonly type="text" id="contact" name="contact" value="<?php echo $contact; ?>">
                    <label for="loc"><i class="fa fa-address-card-o"></i> Location</label>
                    <input readonly type="text" id="loc" name="location" value="<?php echo $location; ?>">

                    <label for="amnt"><i class="fa fa-money"></i> Amount</label>
                    <input readonly type="text" id="amnt" name="amount" value="<?php echo $amount; ?>">
                    <label for="acc"><i class="fa fa-university"></i> Account</label>
                    <input required type="text" id="acc" name="account" placeholder="000-000-000" autofocus>

                    <label for="pmnt"><i class="fa fa-credit-card"></i> Payment Option</label>
                    <input required type="radio" id="loc" name="method" value="Bkash">
                    <label for="loc" class="fa">Bkash</label>
                    <input type="radio" id="loc" name="method" value="Rocket">
                    <label for="loc" class="fa">Rocket</label>
                    <br>
                    <input type="submit" style="width:20%; margin-left:40%;">
                  </div>
                </div>
            </div>
            </form>
          </div>
        </div>
        </div>

      </body>

</html>

<?php }
  }
} ?>