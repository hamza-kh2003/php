<?php
 
$visitors = isset($_COOKIE["numOfvisitors"]) ? json_decode($_COOKIE["numOfvisitors"]) : 0;

    
if(!isset($_COOKIE["visited"]))
{
    $visitors++;

    setcookie("numOfvisitors", json_encode($visitors), time()+3600);

    setcookie("visited", true, time()+3600); 
}


echo "Number of visitors: " . $visitors;

?>