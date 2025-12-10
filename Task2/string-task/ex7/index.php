<?php

$chars="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";

$arrChars = str_split($chars);

shuffle($arrChars);


echo implode("",array_slice($arrChars,0,10));



?>