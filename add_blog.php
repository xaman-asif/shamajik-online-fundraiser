<?php
session_start();
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Add Post</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet">

        <style>
            .addpost {
                font-family: 'Lato', sans-serif;
                width: 800px;
                ;
                height: auto;
                background: #eee;
                color: #000;
                top: 50%;
                left: 50%;
                position: absolute;
                transform: translate(-50%, -50%);
                box-sizing: border-box;
                border: 1px solid black;
                padding: 70px 30px;
            }
        </style>
    </head>

    <body style="background-image: url(https://i.pinimg.com/originals/1a/2f/ce/1a2fce9d9ad2c08b01995324bff7a9b3.jpg);  background-attachment: fixed; background-size: cover;">
        <div class="addpost">
            <form action="add_blog_action.php" method="POST" enctype="multipart/form-data">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Add Title" autocomplete="off"><br>
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" placeholder="Add Description" cols="34" rows="8"></textarea><br>
                <label class="form-label">Add image</label>
                <input type="file" name="pimage"><br>
                <input type="submit" style="position: absolute; left: 40%;" class="btn btn-primary" value="Add Post">
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