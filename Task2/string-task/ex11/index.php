<?php


$char="Z";

  if($char==="z")
    $char="a";

  elseif($char==="Z")
   $char="A";

  else{
      $char=chr(ord($char)+1);
  }



  echo $char;

?>