<?php

  if($_SERVER["REQUEST_METHOD"]==="GET")
  {
    echo"Welcome,". $_GET["username"];
  }


?>