<?php

echo '
<table border="1">
    <tr>
        <td>Salary A</td>
        <td>100</td>
    </tr>
    <tr>
        <td>Salary B</td>
        <td>200</td>
    </tr>
    <tr>
        <td>Salary C</td>
        <td>300</td>
    </tr>
    
</table>
';

?>



<?php
$filename = "php-basfilenamees.php";
if (file_exists($filename)) {
    $lastModified = filemtime($filename);
    echo "Last modified " . date( "l, jS F, Y, g:ia", $lastModified);
} else {
    echo "file is not exist!";
}

  
?>


<?php  
echo "<br>";

   $lines = count(file($filename));


   echo $lines  ;
   ?>