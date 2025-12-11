<?php



 function isArmstrongNumber($num){

   $sum=0;
  $num2=$num;
$digits=[];


while($num!==0){
      
     $digits[]=$num%10;
    $num=intval($num/10);

}

foreach($digits as $digit){
      $sum+=pow($digit,3);
}


if($sum===$num2)
     return true;


else
   return false;
 }


 $num=407;

 if(isArmstrongNumber($num))
    echo "$num is Armstrong Number ";

 else
    echo "$num is not Armstrong Number ";


?>