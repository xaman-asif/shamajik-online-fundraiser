<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Employee Details</h2>

<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Full Name</td>
    <td>Age</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from `test db`"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['ID']; ?></td>
    <td><?php echo $data['Full Name']; ?></td>
    <td><?php echo $data['Age']; ?></td>    
    <td><a href="edit.php?ID=<?php echo $data['ID']; ?>">Edit</a></td>
    <td><a href="delete.php?ID=<?php echo $data['ID']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>