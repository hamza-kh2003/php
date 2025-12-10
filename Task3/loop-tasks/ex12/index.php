<?php

$totalRows = 5;

// الجزء العلوي (تصاعدي)
for ($i = 1; $i <= $totalRows; $i++) {
    echo str_repeat(" ", $totalRows - $i); // المسافات قبل الأحرف
    for ($j = 0; $j < $i; $j++) {
        echo chr(65 + $j) . " ";
    }
    echo "<br>";
}

// الجزء السفلي (تناقصي)
for ($i = $totalRows - 1; $i >= 1; $i--) {
    echo str_repeat(" ", $totalRows - $i); // المسافات قبل الأحرف
    for ($j = 0; $j < $i; $j++) {
        echo chr(65 + $j) . " ";
    }
    echo "<br>";
}

?>
