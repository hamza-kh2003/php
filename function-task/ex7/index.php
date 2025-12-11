<?php


function isPalindrome($str){
    
    $str = strtolower($str);   

    $str=preg_replace("/[^a-z0-9]/", "", $str);

    for($i=0;$i<intval(strlen($str)/2);$i++){

             if($str[$i]!==$str[strlen($str)-1-$i])
              return false;
    }

            return true;
}



   if(isPalindrome("Eva, can I see bees in a cave?"))
      echo "Yes it is a palindrome ";

   else
    echo "No it is not a palindrome ";




?>