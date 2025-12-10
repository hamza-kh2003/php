<?php

 $array1 = array( 2, 0, 10, 12, 6); 

$array1 = [2, 0, 10, 12, 6];


$lowestNum = min(array_filter($array1, fn($n) => $n !== 0));

echo $lowestNum;

?>