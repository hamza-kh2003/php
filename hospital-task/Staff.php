<?php

abstract class Staff{
 
    public $name;
    protected $id;   //$id is protected because it should be accessible to child classes (like Doctor and Nurse) but not accessible directly from outside the class.
    private $salary; // $salary is private to fully protect sensitive data and allow access only through controlled public methods.

 
      public function __construct($name,$id,$salary)
     {
      $this->name=$name;
      $this->id=$id;
      $this->salary=$salary; 
     }

      public function __destruct()
     {
        echo "Staff member $this->name record closed.<br>";
     }

    public function setSalary($salary){
        if($salary<0){
            echo "the salary can not be negative";
        }
        else{
          $this->salary=$salary;
        }
       
     }

    public function getSalary(){
        return $this->salary;
     }


    abstract public function performDuty();
     

 public function getTaxedSalary(){
     return (($this->salary)-($this->salary*0.10));
 }

}

?>