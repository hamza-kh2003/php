<?php



    function reversedString($str){
               $reversed="";
         for($i=strlen($str)-1;$i>=0;$i--){

            $reversed.=$str[$i];
             
         }

          return $reversed;

    }


    echo reversedString("hamza");



?>