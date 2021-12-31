<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono&display=swap" rel="stylesheet">
    <?php
    require_once('dbconfig.php');
    ?>
    <style>
        table, td, th, p {
            font-family: 'IBM Plex Mono', monospace;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        printf("Connect failed: %s\n", $conn->connect_error);
        exit();
    }

    $sql = "SELECT * FROM admins";
    ?>
    <p style="text-align: center;">For Technical Problem, Contact Us</p>
    <table class="table table-responsive table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">Fullname</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
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
                    <td>%s</td><td>%s</td>", $row['fullname'], $row['phone'], $row['email'], $row['location']);
                    printf("</tr>");
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>