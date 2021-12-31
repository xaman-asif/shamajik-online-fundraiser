<html>

<head>
    <?php
    session_start();
    require_once('dbconfig.php');
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_errno) {
        printf("Connect failed: %s\n", $conn->connect_error);
        exit();
    }
    ?>
    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&family=Libre+Baskerville&display=swap" rel="stylesheet">
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

        p,
        body {
            font-family: 'Libre Baskerville', serif;
            font-size: 14px;
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
    $bid = $_GET['blogID'];
    $uid = $_SESSION['username'];
    $sql1 = "SELECT * FROM `blogs` WHERE blog_ID = " . $bid;
    //echo $sql1;
    if ($result = $conn->query($sql1)) {
        while ($row1 = $result->fetch_assoc()) {
            //print_r($row1['descr']); 
            $loved = $row1['loved'];
            $loved++;
            $sql0 = "UPDATE `blogs` SET `loved`=" . $loved . " WHERE blog_ID=" . $bid;
            $conn->query($sql0);
            //echo $sql0;

    ?>
            <nav>
                <a href="index.php" style="text-decoration: none; font-family: 'Righteous', cursive;">
                    <h1 style="text-align: center;">SHAMAJIK.ORG</h1>
                </a>
            </nav>

            <hr>
            <h2 style="text-align: center; font-family: 'Delius Unicase', cursive;"><?php echo $row1['title'] ?></h2>
            <?php
            $date = date_create($row1['publish']);
            echo '<p class="center" style="color:black;">' . 'Views + ❤️ - ' . $row1['loved'] . '</p>';
            echo '<p class="center" style="color:black;"> Published On: ' . date_format($date, "jS M, Y g:i A") . '</p>';
            ?>
            <img src="<?php echo str_replace('#', '%23', $row1['image']) ?>" alt="image" class="center">
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
            <form class="center" action="add_discussion_action.php" method="POST" id="usrform">
                <input type="hidden" name="blog_ID" value="<?php echo $bid; ?>">
                <input type="hidden" name="user_ID" value="<?php echo $uid; ?>">
                <input type="hidden" name="loved" value="<?php echo $loved; ?>">
                <input class="center" type="submit">
            </form>
        </div>
    <?php } else {
        echo '<p class="center" style="font-family: monospace;">Login to discuss</p>';
        echo '<a href="login.php"><button class="center" style="width:10%">LOG IN</button></a>';
    }
    ?>
    <fieldset class="center">
        <legend>Discussion</legend>
        <?php
        $sqlquery2 = "SELECT * FROM threads WHERE blog_ID=" . $bid . " ORDER BY `threads`.`postedOn` DESC";
        //echo $sqlquery2;
        if ($result = $conn->query($sqlquery2)) {
            while ($row2 = $result->fetch_assoc()) {
                $date1 = date_create($row2['postedOn']);
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