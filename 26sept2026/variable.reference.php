
<h1> With &Reference</h1>
<?php
$value1 = "Hello";
$value2 =& $value1; // $value1 and $value2 both equal "Hello"
$value2 = "Goodbye"; // $value1 and $value2 both equal "Goodbye"

echo $value2;
echo "<br>";
?>
