<?php



echo "<table border='1' cellpadding='3' cellspacing='0'>";



for($i=1;$i<=6;$i++){

     echo"<tr>";

        for($j=1;$j<=5;$j++){
          $r=$i*$j;

         echo "<td> 
               $i * $j= $r
             </td>";
    
        }

     echo"</tr>";

}

echo "</table>";





?>