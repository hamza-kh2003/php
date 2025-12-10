<?php

$arr = [60, 86, 95, 63, 55, 74, 79, 62, 50];

$avg = array_sum($arr) / count($arr);


if ($avg < 60) {
    echo "F";
} elseif ($avg < 70) {
    echo "D";
} elseif ($avg < 80) {
    echo "C";
} elseif ($avg < 90) {
    echo "B";
} elseif ($avg < 100) {
    echo "A";
} else {
    echo "Invalid average";
}

?>