<?php

  function removeDuplicates($array1){

  $newArr=[];

   
 for($i=0;$i<count($array1);$i++){

     if(!in_array($array1[$i], $newArr))
          $newArr[]=$array1[$i];

 }
 

return $newArr;

  }


  echo implode(" ",removeDuplicates(array(2, 4, 7, 4, 8, 4)));


?>