<?php

$num="0000657022.24";


$arrNum=str_split($num);


$arrWithoutZero=array_filter($arrNum,fn($n)=>$n!=="0");


echo implode("",$arrWithoutZero);

?>