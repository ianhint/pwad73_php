<?php
include_once ("dbconficc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
</head>
<body>

<h3>Students List</h3>

<?php

$rowData = $conn->query("SELECT * FROM students"); ?>

<table border="1" >
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Contact</th>
<?php
while($row = $rowData->fetch_assoc()){ ?>


  <tr>
    <td><?php echo $row ['Id'] ?></td>
    <td><?php echo $row ['name'] ?></td>
    <td><?php echo $row ['email'] ?></td>
    <td><?php echo $row ['addres'] ?></td>
    <td><?php echo $row ['phonnumber'] ?></td>
  </tr>

    
<?php

}

?>

</table>

    
</body>
</html>