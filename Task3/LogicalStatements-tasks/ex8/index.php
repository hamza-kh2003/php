<?php

$units = 100; 
$bill = 0;

if ($units <= 50) {
    $bill = $units * 2.5;
} elseif ($units <= 150) {
    
    $bill = 50 * 2.5 + ($units - 50) * 5;
} elseif ($units <= 250) {
    
    $bill = 50 * 2.5 + 100 * 5 + ($units - 150) * 6.2;
} else {
 
    $bill = 50 * 2.5 + 100 * 5 + 100 * 6.2 + ($units - 250) * 7.5;
}

echo "Electricity Bill: " . $bill . " JOD";

?>
