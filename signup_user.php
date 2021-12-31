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
            ;
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
        <form action="signup_user_action.php" method="POST">
            <fieldset>
                <legend>Your Information Here</legend>
                <label class="form-label" for="fullname">Fullname: </label>
                <input class="form-control" type="text" id="fullname" name="fullname" autocomplete="off" placeholder="Enter your fullname:" required><br>
                <label class="form-label" for="contact">Contact No: </label>
                <input class="form-control" type="text" id="contact" name="contact" autocomplete="off" placeholder="Enter your contact no:" required><br>
                <label class="form-label">Your role: </label>
                <input class="form-check-input" type="radio" id="Individual" name="Role" value="Individual" checked>
                <label class="form-label" for="Individual">Individual</label>
                <input class="form-check-input" type="radio" id="Organization" name="Role" value="Organization">
                <label class="form-label" for="Organization">Organization</label><br>

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
            </fieldset>
            <fieldset>
                <legend>Type your username and password</legend>
                <label class="form-label" for="username">Username: </label>
                <input class="form-control" type="username" name="username" placeholder="Enter Your Username: " autocomplete="off" required>
                <label class="form-label" for="password">Password: </label>
                <input class="form-control" type="password" name="password" placeholder="Enter Your Password: " autocomplete="off" required>
            </fieldset>
            <br>
            <input style="margin-left: 300px;" type="submit" value="SIGN UP"><br>
            <a style="margin-left: 250px;" href="login.php">Already have an account?</a>
        </form>
    </div>
</body>

</html>