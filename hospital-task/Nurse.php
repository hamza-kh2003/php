<?php


class Nurse extends Staff implements Emergency{
   
    protected $shiftTime;
    
   public function __construct($name, $id, $salary,$shiftTime)
  {
    parent::__construct($name, $id, $salary);
    $this->shiftTime=$shiftTime;
  }

   public function performDuty(){
      echo "Nurse $this->name is caring for and monitoring patients in $this->shiftTime.<br>";
  }

     /*public function showSalary(){
     
     echo $this->salary;
   
   }*/

     public function showSalary(){
     
     echo $this->getSalary();
   
   }

    public function handleEmergency(){
         echo "Nurse is handling an emergency situation.";
     }

}

?>