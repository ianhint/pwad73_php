
<h1>Casting</h1>
<?php


$score = (double) "13.44";
echo $score;
echo "<br>";
var_dump($score);


$x = (array) "Rokon";
var_dump($x);


?>


<h1>Juggling</h1>\
<?php
$total = 5; // an integer
$count = "15"; // a string
$total = $total + $count; // $total = 20 (an integer)

echo $total;
echo "<br>";
?>

<?php
$val1 = "1.2e6"; // "1200"
$val2 = 2;
echo $val1 * $val2; // outputs 2400 as 1.2e3 as a float is1200
?>