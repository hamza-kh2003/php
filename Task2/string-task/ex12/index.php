<?php 

$originalStr="The brown fox";
$insert=" quick ";
$position="3";
echo substr_replace($originalStr,$insert,$position,0);

?>