<?php
$url = "https://www.w3schools.com/php/default.asp";

$components = parse_url($url);

echo "Scheme: " . $components['scheme'] . "<br>";
echo "Host: " . $components['host'] . "<br>";
echo "Path: " . $components['path'] . "<br>";
?>