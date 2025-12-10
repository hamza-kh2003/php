<?php


$num1 = 50;
$num2 = 70;
$num3 = 90;

$max = 0;

if ($num1 >= $num2 && $num1 >= $num3) {
    $max = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $max = $num2;
} else {
    $max = $num3;
}

echo $max;

 
?>