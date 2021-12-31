<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sign Up Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <style>
        .addpost {
            font-family: monospace;
            width: 800px;
            height: auto;
            background: #eee;
            color: #000;
            top: 60%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            border: 1px solid black;
            padding: 70px 30px;
        }
    </style>
</head>

<body>
    <div class="addpost">
        <form action="addcomment_action.php" method="POST">
            <fieldset>
                <legend>Your Information Here</legend>
                <label class="form-label" for="username">Comment ID: </label>
                <input class="form-control" type="text" id="comment_ID" name="comment_ID" autocomplete="off" placeholder="Enter comment_ID:" required><br>
                <label class="form-label" for="username">User Name: </label>
                <input class="form-control" type="text" id="username" name="username" autocomplete="off" placeholder="Enter username:" required><br>
                <label class="form-label" for="postID">postID: </label>
                <input class="form-control" type="text" id="postID" name="postID" autocomplete="off" placeholder="Enter postID:" required><br>
                <label class="form-label" for="publish">Publish: </label>
                <input class="form-control" type="text" id="publish" name="publish" autocomplete="off" placeholder="Enter publish:" required><br>
                <label class="form-label" for="cmnttext">Cmnttext: </label>
                <input class="form-control" type="text" id="cmnttext" name="cmnttext" autocomplete="off" placeholder="Enter cmnttext:" required><br>
                <br>
            </fieldset>
            <br>
            <input type="submit" value="Add Comment" style="width:20%; display:block; margin-left: auto; margin-right:auto">
        </form>
    </div>
</body>
</html>