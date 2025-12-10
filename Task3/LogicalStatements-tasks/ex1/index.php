<?php

if ($year % 400 === 0) {
    echo "leap year";
} elseif ($year % 100 === 0) {
    echo "not leap year";
} elseif ($year % 4 === 0) {
    echo "leap year";
} else {
    echo "not leap year";
}

?>