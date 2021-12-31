<!DOCTYPE html>
<html lang="en">

<?php
session_start();
?> 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Fundraising Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!--FONT-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <!--END FONT-->
    <link rel="stylesheet" href="index.css">
    <?php
    require_once('dbconfig.php');
    ?>

</head>

<body>
    <?php
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_errno) {
        printf("Connect failed: %s\n", $conn->connect_error);
        exit();
    }
    $sqlquery1 = "SELECT * FROM `posts` WHERE posts.verified = 1";
    echo "<marquee><p style='color:white'>" . "Session started for: " . $_SESSION['username'] . "</p></marquee>";
    ?>
    <section>
        <nav class="navbar1 navbar-expand-lg navbar-light sticky-top" style="background-color:slategray;  position : fixed; top: 0px; width:100%;">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="myaccount.php">My Account</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog_posts.php">Blog Posts</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">About us</a> </li>
                    <li class="nav-item">
                        <label class="form-label" style="color: black;">Post Catagory: </label>
                        <form action="catagorized_post.php" class="d-flex" method="post">
                            <Select onchange="this.form.submit()" name="catagory" class="form-select" style="background-color: black; width: fit-content; color: white;">
                                <option value="All">All</option>
                                <option value="Activism">Activism</option>
                                <option value="Arts & Craft">Arts & Craft</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Education">Education</option>
                                <option value="Environment">Environment</option>
                                <option value="Health">Health</option>
                                <option value="Parenting">Parenting</option>
                                <option value="Food">Food</option>
                                <option value="Natural Disaster">Natural Disaster</option>
                            </select>
                        </form>
                    </li>
                    <li class="nav-item">
                        <label class="form-label" style="color: black;">Sort By: </label>
                        <form action="sorted_post.php" class="d-flex" method="post">
                            <Select onchange="this.form.submit()" name="catagory" class="form-select" style="background-color: black; width: fit-content; color: white;">
                                <option value="Popularity">Popularity</option>
                                <option value="Newest">Newest</option>
                                <option value="End Date">End Date</option>
                                <option value="Most Funded">Most Funded</option>
                                <option value="Least Funded">Least Funded</option>
                                <option value="Near me">Near me</option>
                            </select>
                        </form>
                    </li>
                    <li class="nav-item">
                        <form class="d-flex" action="search.php">
                            <input class="form-control me-2" type="search" id="searchbox" placeholder="Tap to search" autocomplete="off" style="width:fit-content;">
                            <input style="color:black;" class="btn btn-outline-success" type="submit" value="Search" id="searchbtn">
                        </form>
                    </li>
                    <?php
                    if ($_SESSION['username'] == NULL) {
                    ?>
                        <li class="nav-item">
                            <form class="d-flex" action="login.php">
                                <input style="color:black;" class="btn btn-outline-secondary" type="submit" value="Log In" id="loginbtn">
                            </form>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <form class="d-flex" action="logout.php">
                                <input style="color:black" class="btn btn-outline-secondary" type="submit" value="Log Out" id="loginbtn">
                            </form>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </section>
    <br>
    <a href="add_post.php" style="margin: 43%;"><button type="button" class="btn btn-danger">Add Donation Post</button></a>
    <div class="main">

        <?php
        if ($result = $conn->query($sqlquery1)) {
            while ($row = $result->fetch_assoc()) { ?>
                <div class="card" style="background-color: rosybrown">
                    <div class="image"><a href="<?php echo "view_post.php?postID=" . $row['postID'] ?>">
                            <img style="height: 200px;; object-fit: cover;" src="<?php echo str_replace('#', '%23', $row['image']); ?>"></a>
                        <!--<div class="w3-light-grey">
                            <div id="myBar" class="w3-container w3-green" style="height:24px;width:1%"></div>
                        </div>-->
                    </div>
                    <h4 style="text-align: center; color:black; font-family:serif"><b><?php echo number_format($row['fundNeeded']); ?>TK</b></h4>
                    <h1 style="text-align: center"><?php echo $row['title']; ?></h1>
                    <div class="des">
                        <span><b><?php echo substr($row['descr'], 0, 16); ?>...</b></span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width:<?php echo intval($row['fundRaised'] / $row['fundNeeded'] * 100); ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo intval($row['fundRaised'] / $row['fundNeeded'] * 100, 10); ?>%</div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
        <!--start card1
        <div class="card" style="background-color: rosybrown">

            <div class="image"><a href="C:\Users\MUNNA\Dropbox\DBMS Project\Munna_Test\nav bar\form\Online_Donation_form.html" target="_blank">
                    <img src="https://www.alvarez.cz/upload/thumbs/w600/h600/3116.png"></a>
                <br>
                <div class="w3-light-grey">
                    <div id="myBar" class="w3-container w3-green" style="height:24px;width:1%"></div>
                </div>
            </div>
            <h2 style="color: blue"><b>$140,122,56</b></h2>
            <h1 style="text-align: center">Help me fund with cancer.</h1>
            <div class="des">
                <p><b>I am admitted PG Hospital. I need about 2 lacs taka.</b></p>
            </div>
        </div>
        -->
    </div>
</body>