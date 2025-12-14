<?php

$num1 = 15;
$num2 = 3;
$operation = "/"; 


switch($operation) {
    case "+":
        $result = $num1 + $num2;
        break;
    case "-":
        $result = $num1 - $num2;
        break;
    case "*":
        $result = $num1 * $num2;
        break;
    case "/":
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            $result = "Cannot divide by zero!";
        }
        break;
    default:
        $result = "Invalid operation!";
}


echo "Result of $num1 $operation $num2 = $result";
?>
