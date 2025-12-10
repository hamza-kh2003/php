<?php

$num1=3;
$num2=9;
$operation="+";


switch($operation){

  case "+":
     echo $num1+$num2;
    break;
  case "-":
     echo $num1-$num2;
    break;
  case "/":
     echo $num1/$num2;
    break;
  case "*":
     echo $num1*$num2;
    break;
    default:
    echo "error";

}

?>
