<?php

function swap(&$x,&$y){
  
    $save=$x;

    $x=$y;

    $y=$save;
    
}

$x=10;
$y=20;

swap($x,$y);


echo "x=$x and y=$y" ;


?>