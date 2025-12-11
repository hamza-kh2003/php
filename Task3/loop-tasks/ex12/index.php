<?php


$letters = ["A", "B", "C", "D", "E"];  
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {

    echo str_repeat("&nbsp;&nbsp;", $rows - $i);
    for ($j = 0; $j < $i; $j++) {
        echo $letters[$j] . " ";
    }

    echo "<br>";
}

for ($i = $rows - 1; $i >= 1; $i--) {

    echo str_repeat("&nbsp;&nbsp;", $rows - $i);
    for ($j = 0; $j < $i; $j++) {
        echo $letters[$j] . " ";
    }

    echo "<br>";
}

?>