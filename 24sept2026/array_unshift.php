<?php

$fruits = array("Apple", "Banana", "Cherry");
echo"<pre>";
array_unshift($fruits, "Orange", "Kiwi", "Lemon");
print_r($fruits);

?>


<?php
$citys = array( "Dhaka" , "Cottogram", "Mymensingh", "Cumilla","Barishal");
array_push($citys, "Khulna", "Rajshahi");


print_r($citys);

?>

<?php
for($x =0; $x <= 10; $x++){
 echo ":$x";   
}

?>