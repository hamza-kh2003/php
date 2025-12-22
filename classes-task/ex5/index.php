<?php


$date1 = new DateTime("1981-11-03");
$date2 = new DateTime("2013-09-04");

$diff=$date1->diff($date2);

echo "Difference : $diff->y years, $diff->m months, $diff->d days";


?>