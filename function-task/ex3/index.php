<?php

function isLowerCaseChar($str){

     for($i=0;$i<strlen($str);$i++){

           if($str[$i]!==strtolower($str[$i]))
                return false;
     }

     return true;

}


if(isLowerCaseChar("hamza"))
   echo "Your String is Ok";
   
else 
    echo "Your String is not Ok";



?>