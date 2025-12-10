<?php 

$arr=[1,2,3,4,5];

$location=4;
$newItem="$";

array_splice($arr,$location-1,0,[$newItem]);

echo implode(" ", $arr);


?>