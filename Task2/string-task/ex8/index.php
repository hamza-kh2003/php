<?php

$str="That new trainee is so genius.";
$wordRep="our";

$strArr=explode(" ",$str);

$strArr[0]=$wordRep;

echo implode(" ",$strArr);


?>