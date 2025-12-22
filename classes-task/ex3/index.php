<?php

class MyClass{

public function factorial (int $num):int{
    $fac=1;
     for($i=1;$i<=$num;$i++){

         $fac*=$i;   

     }
      return $fac;
}

}

$object=new MyClass();


echo $object->factorial(5);

?>