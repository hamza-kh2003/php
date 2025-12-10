<?php

   
$str1="dragonball";
$str2="dragonboll";

for($i=0;$i<strlen($str1);$i++){

     if($str1[$i]!==$str2[$i]){
       $index=$i;
       $chr1=$str1[$i];
       $chr2=$str2[$i];
        break;
     }
           
}

echo "First difference between two strings at position $index: \"$chr1\" vs \"$chr2\"";





?>