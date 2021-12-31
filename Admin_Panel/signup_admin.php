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
        <form action="signup_admin_action.php" method="POST">
            <fieldset>
                <legend>Your Information Here</legend>
                <label class="form-label" for="fullname">Fullname: </label>
                <input class="form-control" type="text" id="fullname" name="fullname" autocomplete="off" placeholder="Enter fullname:" required><br>
                <label class="form-label" for="email">Phone: </label>
                <input class="form-control" type="text" id="phone" name="phone" autocomplete="off" placeholder="Enter phone:" required><br>
                <label class="form-label" for="email">Email: </label>
                <input class="form-control" type="text" id="email" name="email" autocomplete="off" placeholder="Enter email:" required><br>
                <label class="form-label" for="location">Choose your location:</label>
                <select class="form-select" id="location" name="location">
                    <option value="Barishal">Barishal</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Dhaka" selected>Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                </select>
                <br>
                <label class="form-label" for="adminid">Admin ID: </label>
                <input class="form-control" type="text" id="adminID" name="adminID" autocomplete="off" placeholder="Enter Admin Username:" required><br>
                <label class="form-label" for="adminpassword">Password: </label>
                <input class="form-control" type="password" id="adminpassword" name="adminpassword" autocomplete="off" placeholder="Enter Admin Password:" required><br>
            </fieldset>
            <br>
            <input type="submit" value="Add admin" style="width:20%; display:block; margin-left: auto; margin-right:auto">
        </form>
    </div>
</body>
</html>