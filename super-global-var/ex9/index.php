<?php


setcookie("user", "Hamza", time() + 3600, "/", "", false, true);
setcookie("theme", "dark", time() + 3600, "/", "", false, true);




foreach($_COOKIE as $name => $value) {
    echo "Cookie name: $name, value: $value <br>";
}



setcookie("user", "", time() - 3600, "/");
setcookie("theme", "", time() - 3600, "/");

?>