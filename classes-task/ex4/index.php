<?php

class MyClass{

public function sortArray ($arr){
   sort($arr);
   return $arr;
}

}

$object=new MyClass();

print_r($object->sortArray(array(11, -2, 4, 35, 0, 8, -9)));

?>