<?php
   

  function isPrime($num){
   

    if($num===1){
    echo"1 is not prime";
    return;
    }
        

$count=0;
    
   for($i=2;$i<$num;$i++){
      
    if($num%$i===0)
    {
         $count++;
    
        break;
    }
        
   }

   if($count===1)

    echo "$num is not prime";

    else 

  echo "$num is prime";


  }

  
   isPrime(1);
  
 

?>