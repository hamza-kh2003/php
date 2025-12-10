<?php

$str="Orange Coding Academy";

$count=0;

for($i=0;$i<strlen($str);$i++){

       if(strtolower($str[$i])==="c")
           $count++;

}

echo $count;


?>