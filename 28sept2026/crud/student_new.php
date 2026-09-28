<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Student Entry Form</h3>

    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //Data Recived from entry form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $addres = $_POST['addres'];
        $phonnumber = $_POST['phonnumber'];
        include_once("dbconficc.php"); //Database Connection


        // echo "INSERT INTO students 
        // (id,name,email,addres,phonnumber)
        //  VALUES (NULL,'$name','$email','$addres','$phonnumber')"

        $conn ->query("INSERT INTO students 
        (id,name,email,addres,phonnumber)
         VALUES (NULL,'$name','$email','$addres','$phonnumber')");

         if($conn ->affected_rows){
            echo "Success";
         }
    }
    ?>

    <form action="" method="post">
      <input type="text" name="name" placeholder="Enter name"><br><br>
      <input type="text" name="email" placeholder="Enter email"><br><br>
      <input type="text" name="addres" placeholder="Enter adress"><br><br>
      <input type="text" name="phonnumber" placeholder="Enter Phone"><br><br>
      <input type="submit" name="submit" value="SAVE">

    </form>
    <br><br>
<a href="index.php">Back to Student List</a>
    
</body>
</html>