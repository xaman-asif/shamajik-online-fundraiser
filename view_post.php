<html>
<!--
$date1=date_create("2022-03-15");
$date2=date_create(date("Y-m-d"));
$diff=date_diff($date2,$date1);
echo $diff->format("%R%a days");
-->

<head>
    <?php
    session_start();
    require_once('dbconfig.php');
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_errno) {
        printf("Connect failed: %s\n", $conn->connect_error);
        exit();
    }
    //echo "<marquee><p style='color:black'>" . "Session started for: " . $_SESSION['username'] . "</p></marquee>";
    ?>
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Delius+Unicase&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <!--FONTS-->
    <style>
        h1 {
            text-align: center;
            color: black;
        }

        h3 {
            text-align: center;
            color: black;
            font-family: monospace;
        }

        p {
            font-family: 'Noto Serif', serif;
            font-size: 120%;
            text-align: center;
        }

        input.placeholder {
            text-align: center;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .gird {
            display: grid;
            grid-template-columns: 1fr 1fr;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        body {
            font-family: 'Roboto Slab', serif;
        }

        #txtarea {
            width: 100%;
            height: 10%;
            font-family: Noto Serif;
            font-size: 100%;
        }
    </style>
</head>

<body>
    <?php
    $postID = $_GET['postID'];
    $userID = $_SESSION['username'];
    $sqlquery1 = "SELECT * FROM `posts` WHERE postID = " . $postID;

    if ($result = $conn->query($sqlquery1)) {
        while ($row1 = $result->fetch_assoc()) {
            //print_r($row1);
            $date1 = date_create($row1['enddate']);
            $date2 = date_create(date("Y-m-d"));
            $diff = date_diff($date2, $date1);
            //echo $diff->format("%R%a days");
    ?>
            <nav>
                <a href="index.php" style="text-decoration: none; font-family: 'Righteous', cursive;">
                    <h1 style="text-align: center;">SHAMAJIK.ORG</h1>
                </a>
            </nav>

            <hr>
            <h2 style="text-align: center; font-family: 'Delius Unicase', cursive;"><?php echo $row1['title'] ?></h2>
            <h4 style="text-align: center;">🕒 <?php echo $row1['enddate'] ?>📍 <?php echo $row1['location'] ?></h4>
            <img src="<?php echo str_replace('#', '%23', $row1['image']) ?>" alt="image" class="center">
            <div style="width: 50%; margin-left: auto; margin-right: auto;">
                <progress style="width: 100%; height: 20px;" max="100" value="<?php echo $row1['fundRaised'] / $row1['fundNeeded'] * 100 ?>"> 70% </progress>
            </div>
            <div class="gird">
                <div>
                    <h3>Goal: <?php echo $row1['fundNeeded'] ?>TK</h3>
                    <h3>Donors: <?php echo $row1['totalDonors'] ?></h3>
                </div>
                <div>
                    <h3>Raised: <?php echo $row1['fundRaised'] ?>TK</h3>
                    <h3>Days Left: <?php echo $diff->format("%R%a days"); ?></h3>
                </div>
            </div>
            <div class="center">
                <p><?php echo $row1['descr'] ?></p>
                <button class="center" onclick="prompt('Press Ctrl + C, then Enter to copy to clipboard',window.location.href)">🔗Share</button>
            </div>
            <br>
    <?php }
    } ?>
    <?php
    if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { ?>
        <div class="center">
            <textarea class="center" id="txtarea" name="comment" form="usrform" placeholder="Enter your comment here"></textarea>
            <form class="center" action="add_comment_action.php" method="POST" id="usrform">
                <input type="hidden" name="post_ID" value="<?php echo $postID; ?>">
                <input type="hidden" name="user_ID" value="<?php echo $userID; ?>">
                <input class="center" type="submit">
            </form>
            <br>
            <form action="payment_post.php" method="post">
                <input class="center" style="width:20%; text-align:center" type="number" name="Amount" placeholder="Amount?" autocomplete="off" required>
                <input class="center" style="width:20%" type="submit" name="Submit" value="Donate">
                <input type="hidden" name=PID value=<?php echo $postID; ?>>
            </form>
        </div>
    <?php } else { ?>
        <p class="center" style="font-family: monospace;">Login to comment</p>
        <a href="login.php"><button class="center" style="width:10%">LOG IN</button></a>
    <?php }
    ?>

    <fieldset class="center">
        <legend>Comments</legend>
        <?php
        $sqlquery2 = "SELECT * FROM comments WHERE postID=" . $postID . " ORDER BY `comments`.`publish` DESC";
        if ($result = $conn->query($sqlquery2)) {
            while ($row2 = $result->fetch_assoc()) {
                $date1 = date_create($row2['publish']);
                //print_r($date1);
                $date2 = date_create(date("Y-m-d"));
                $diff = date_diff($date2, $date1);
                //echo $diff->format("%R%a days");

        ?>

                <div style="font-family: monospace;">
                    <u style="color: blue;"><?php echo $row2['username'] ?></u><span style="color: gray;"> on <?php echo $diff->format("%R%a days"); ?> days ago</span>
                    <textarea style="color: green; width: 100%; height: auto; font-size: 120%;" disabled><?php echo $row2['cmnttext'] ?></textarea>
                </div>
        <?php       }
        }
        ?>
    </fieldset>
</body>

</html>