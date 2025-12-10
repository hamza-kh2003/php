<?php


$randNumbers=[]; 

while(count($randNumbers)<10){

$randNum=mt_rand(11,20);

   if (!in_array($randNum, $randNumbers)){
 array_push($randNumbers,$randNum);
   } 
 
}
  

echo implode(",",$randNumbers);

?>