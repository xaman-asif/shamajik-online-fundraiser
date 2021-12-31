<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <style>
       .container{
           min-height: 100vh;
           display: flex;
           justify-content: center;
           align-items: center;
           flex-direction: column;
       }

       .container form{
           width: 500px;
           padding: 20px;
           border-radius: 10px;
           box-shadow: 0 4px 8px 0 rgba(0 , 0, 0, 0.2),0 6px 20px 0 rgba(0, 0, 0, 0.19);
       }
    </style>

</head>
<body>
<div class="container">
<form action="create.php" method="post">
<h4 class="display-4 text-center">ADD USER</h4><hr><br>
<?php if(isset($_GET['error'])) { ?>
<div class="alert alert-danger" role="alert">
  <?php echo $_GET['error']; ?>
</div>
<?php } ?>
  <div class="form-group">
    <label for="username">User Name</label>
    <select>
    1.Dhaka
    </select>
    <input type="username" class="form-control" id="username" name="username" value="<?php if(isset($_GET['username'])) echo($_GET['username']); ?>" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="userrole">User Role</label>
    <input type="userrole" class="form-control" id="userrole" name="userrole" value="<?php if(isset($_GET['userrole'])) echo($_GET['userrole']); ?>" placeholder="Enter userrole">
  </div>
  <div class="form-group">
    <label for="raised">Raised</label>
    <input type="raised" class="form-control" id="raised" name="raised" value="<?php if(isset($_GET['raised'])) echo($_GET['raised']); ?>" placeholder="Enter raised">
  </div>
  <div class="form-group">
    <label for="funded">Funded</label>
    <input type="funded" class="form-control" id="funded" name="funded" value="<?php if(isset($_GET['funded'])) echo($_GET['funded']); ?>" placeholder="Enter funded">
  </div>
  <div class="form-group">
    <label for="fullname">Full Name</label>
    <input type="fullname" class="form-control" id="fullname" name="fullname" value="<?php if(isset($_GET['fullname'])) echo($_GET['fullname']); ?>" placeholder="Enter Fullname">
  </div>
  <div class="form-group">
    <label for="contact">Contact</label>
    <input type="contact" class="form-control" id="contact" name="contact" value="<?php if(isset($_GET['contact'])) echo($_GET['contact']); ?>" placeholder="Enter contact">
  </div>
  <div class="form-group">
    <label for="location">Location</label>
    <input type="location" class="form-control" id="location" name="location" value="<?php if(isset($_GET['location'])) echo($_GET['location']); ?>" placeholder="Enter location">
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="create">create</button>
</form>  
</div>
</body>
</html>