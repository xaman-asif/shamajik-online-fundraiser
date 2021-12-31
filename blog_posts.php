<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Add Post</title>
  <link rel="stylesheet" type="text/css" href="add_post.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=KoHo&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&family=Libre+Baskerville&display=swap" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <style>
    .lang-en {
      font-family: 'Libre Baskerville', serif;
      font-size: 14px;
    }

    .lang-bn {
      font-family: 'Hind Siliguri', serif;
      font-size: 10px;
    }
  </style>
  <?php
  require_once('dbconfig.php');
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
  }
  function getColor()
  {
    $colors = array("(102,84,94)", "(163,145,147)", "(170,111,115)", "(238,169,144)", "(246,224,181)");
    return $colors[rand(0, 5)];
  }
  ?>
</head>

<body style="background-image: url(https://i.pinimg.com/originals/1a/2f/ce/1a2fce9d9ad2c08b01995324bff7a9b3.jpg); background-attachment: fixed; background-size: cover;">
  <h1>
    <p style="text-align: center; font-family: 'KoHo', sans-serif;">Write Profoundly ✍️</p>
  </h1>
  <a href="add_blog.php" style="margin: 45%;"><button type="button" class="btn btn-outline-primary">Add Blog Post</button></a>

  <div class="lang-bn; lang-en">
    <?php
    $sqlquery = "SELECT b.blog_ID, b.username, b.title, b.descr, b.publish, b.loved FROM blogs as b ORDER BY b.publish DESC";
    if ($result = $conn->query($sqlquery)) {
      $var = 1;
      while ($row = $result->fetch_assoc()) {
    ?>
        <div class="card text-center" style="margin:15px;">
          <div class="card-header" style="background-color: rgb<?php $temp = getColor();
                                                                echo $temp; ?>;">
            <?php echo $row['username'] . ' wrote:'; ?>
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title']; ?></h5>
            <p class="card-text"><?php echo substr($row['descr'],0,512); ?>...</p>
            <form action="view_blog.php" method="GET">
              <input type="hidden" name="blogID" value="<?php echo $row['blog_ID']; ?>">
              <input type="submit" class="btn btn-primary" value="Read More">
            </form>
          </div>
          <div class="card-footer text-muted" style="background-color: rgb<?php echo $temp; ?>;">
            <?php
            $date = date_create($row['publish']);
            echo '<span style="color:black;">' . 'Views + ❤️ - ' . $row['loved'] . ' >-·^_^·-< Published On: ' . date_format($date, "jS M, Y g:i A") . '</span>';
            ?>
          </div>
        </div>
    <?php }
    } ?>
  </div>
</body>

</html>