<?php
session_start();
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Add Post</title>
        <link rel="stylesheet" type="text/css" href="add_post.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="addpost">
            <form action="add_post_action.php" method="POST" enctype="multipart/form-data">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Add Title" autocomplete="off" required><br>
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" placeholder="Add Description" cols="34" rows="8" required></textarea><br>
                <label class="form-label">Fund Needed</label>
                <input type="number" name="fundNeeded" class="form-control" placeholder="Fund Needed?" autocomplete="off" min="0" required><br>
                <label class="form-label">End Date</label>
                <input type="date" name="endDate" class="form-control" min="2021-01-01" required><br>
                <label class="form-label">Select your location:</label>
                <select id="location" name="location" class="form-select">
                    <option value="Barishal">Barishal</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Dhaka" selected>Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                </select>
                <label class="form-label">Select Post Catagory:</label>
                <select id="catagory" name="catagory" class="form-select">
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
                <br>
                <div style="text-align: center;">
                    <label class="form-label">Add image</label>
                    <input type="file" name="pimage" required><br>
                    <input type="submit" class="btn btn-primary" value="Add Post">
                </div>
            </form>
        </div>
    </body>

    </html>
<?php } else {
    echo "
        <script>
            window.location.assign('login.php');
        </script>
    ";
} ?>