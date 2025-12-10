<?php

$arr=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
 $sum=0;



$avgTemp = array_sum($arr) / count($arr);


sort($arr);

$lowest5 = implode(",",array_slice($arr, 0, 5));
$highest5 = implode(",",array_slice($arr,count($arr)-5,5));

echo "Average Temperature is: ".round($avgTemp,1);
echo "<br>List of five lowest temperatures: $lowest5";
echo "<br>List of five highest  temperatures: $highest5 " ;


?>