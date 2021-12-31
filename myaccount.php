<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>My Account</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  <?php
  require_once('dbconfig.php');
  ?>
  <style>
    table,
    td,
    th,
    p {
      font-family: 'IBM Plex Mono', monospace;
      text-align: center;
    }
  </style>
</head>

<body>
  <?php
  session_start();
  $user = $_SESSION['username'];
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
  }

  $sql = "SELECT * FROM userInfo WHERE username='$user'";
  $sql1 = "SELECT * FROM posts WHERE user='$user'";
  $sql2 = "SELECT * FROM comments WHERE username='$user' ORDER BY publish DESC";
  $sql3 = "SELECT * FROM payment WHERE user='asif' ORDER BY donatedOn DESC";
  //echo $sql;
  ?>

  <nav>
    <a href="index.php" style="text-decoration: none; font-family: 'Righteous', cursive;">
      <h1 style="text-align: center;">SHAMAJIK.ORG</h1>
    </a>
  </nav>

  <p style="text-align: center;">Welcome <?php echo $user ?></p>
  <table class="table table-responsive table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">Fullname</th>
        <th scope="col">Phone</th>
        <th scope="col">Location</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_assoc()) {
          printf("<tr>");
          printf("<td>%s</td>
                    <td>%s</td>
                    <td>%s</td>", $row['fullname'], $row['contact'], $row['location']);
          printf("</tr>");
        }
      }
      ?>
    </tbody>
  </table>
  <br>
  <p style="text-align: center;">Posts of <?php echo $user ?></p>
  <br>
  <table class="table table-responsive table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">Post Title</th>
        <th scope="col">Fund Needed</th>
        <th scope="col">Fund Raised</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result = $conn->query($sql1)) {
        while ($row = $result->fetch_assoc()) {
          printf("<tr>");
          printf("<td>%s</td>
                    <td>%s</td>
                    <td>%s</td>", $row['title'], $row['fundNeeded'], $row['fundRaised']);
          printf("</tr>");
        }
      }
      ?>
    </tbody>
  </table>
  <br>
  <p style="text-align: center;">Comments of <?php echo $user ?></p>
  <br>

  <table class="table table-responsive table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">Post ID</th>
        <th scope="col">Comment Text</th>
        <th scope="col">Comment On</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result = $conn->query($sql2)) {
        while ($row = $result->fetch_assoc()) {
          printf("<tr>");
          printf("<td><a href=view_post.php?postID=%d>%s</a></td>
                    <td>%s</td>
                    <td>%s</td>", $row['postID'], $row['postID'], $row['cmnttext'], $row['publish']);
          printf("</tr>");
        }
      }
      ?>
    </tbody>
  </table>
  <br>
  <p style="text-align: center;">Payments of <?php echo $user ?></p>
  <table class="table table-responsive table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">Post ID</th>
        <th scope="col">Amount</th>
        <th scope="col">Payment Method</th>
        <th scope="col">Amount</th>
        <th scope="col">Donated On</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result = $conn->query($sql3)) {
        while ($row = $result->fetch_assoc()) {
          printf("<tr>");
          printf("<td><a href=view_post.php?postID=%d>%s</a></td>
                    <td>%s</td>
                    <td>%s</td><td>%s</td><td>%s</td>", $row['post'], $row['post'], $row['amount'], $row['type'], $row['amount'], $row['donatedOn']);
          printf("</tr>");
        }
      }
      ?>
    </tbody>
  </table>
</body>

</html>