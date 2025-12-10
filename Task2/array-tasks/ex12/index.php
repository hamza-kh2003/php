<?php
  $words =  array("abcd","abc","de","hjjjss","gs","wer");

  $longestWord=$words[0];
  $shortesttWord=$words[0];

   foreach($words as $word){

          if(strlen($word)>strlen($longestWord)){

               $longestWord=$word;

          }

           if(strlen($word)<strlen($shortesttWord)){

               $shortesttWord=$word;

          }
   }


   echo "The shortest array length is ".strlen($shortesttWord).".The longest array length is ".strlen($longestWord);



?>