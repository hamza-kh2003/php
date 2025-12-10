<?php


for ($i = 1; $i <= 5; $i++){
    for ($j = 1; $j <= 5; $j++){  
        if ($i == 1) {
            echo "A ";
        } elseif ($i == 2) {
            echo ($j <= 2) ? "A " : "B ";
        } elseif ($i == 3) {
            echo ($j <= 2) ? "A " : "C ";
        } elseif ($i == 4) {
            echo ($j == 1) ? "A " : "D ";
        } else {
            echo "E ";
        }
    }
    echo "<br>";
}
    



?>