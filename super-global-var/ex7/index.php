<?php

$counter = isset($_COOKIE["counter"]) ? json_decode($_COOKIE["counter"]) : 0;


$counter++;


setcookie("counter", json_encode($counter), time() + 3600);


$_COOKIE["counter"] = json_encode($counter);


echo "Page refreshed " . $counter . " times.";
?>
