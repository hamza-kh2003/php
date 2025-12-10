<?php

$str="The quick brown fox jumps over the lazy dog";
$remove="fox";


$strArr=explode(" ",$str);

$filteredStrArr=array_filter($strArr,fn($n)=>$n!==$remove);
 
echo implode(" ",$filteredStrArr) ;


?>