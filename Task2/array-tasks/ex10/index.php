<?php

   $colors = array("red","blue", "white","yellow");

    foreach($colors as $index=>$value){
       $colors[$index]=strtolower($value);
    }
    
    echo "<pre>";
    print_r($colors);
    echo "</pre>";

?>