<?php


$str="The quick brown fox jumps over the lazy";

$strArr=explode(" ",$str);

echo implode(" ",array_slice($strArr,0,5));


?>