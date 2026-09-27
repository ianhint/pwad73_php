<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription</title>
</head>
<body>

<h2>Subscription From</h2>
<?php
//print_r($_REQUEST);
if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];

echo"You have submitted : <br>";
echo "Name :" .$name . "<br>";
echo "Email :" .$email . "<br>";
}



?>
<form action="" method="post">

  <input type="text" name="name" placeholder="Enter your name"><br><br>    
  <input type="text" name="email" placeholder="Enter your email"><br><br>

  <input type="submit" name="submit" value="subscribe">

</form>
    
</body>
</html>