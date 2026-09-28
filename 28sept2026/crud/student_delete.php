<?php

$id = $_GET['id'];

include_once("dbconficc.php");

$conn->query("DELETE FROM students WHERE id='$id'");

if($conn ->affected_rows){
    header("location: index.php");
}

?>