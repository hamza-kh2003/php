<?php


for ($i = 1; $i <= 5; $i++){
    for ($j = 1; $j <= 5; $j++){  
       if($i===1)
        echo 1;

       elseif($i===2){
        echo  $j<=3?"1":"2";
       }

       elseif($i===3){
          echo  $j<=2?"1":"3";
       }

       elseif($i===4){
          echo  $j<=1?"1":"4";
       }
       else{
        echo "5";
       }
    }
    echo "<br>";
}
    
?>