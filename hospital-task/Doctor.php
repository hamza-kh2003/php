<?php
  

 class Doctor extends Staff implements Surgeon{

  protected $specialty;

  public function __construct($name, $id, $salary,$specialty)
  {
    parent::__construct($name, $id, $salary);
    $this->specialty=$specialty;
  }
   
  public function performDuty(){
     echo "Doctor $this->name is diagnosing and treating patients in $this->specialty.<br>";
   }
    
   function printId(){
     
     echo $this->id;
   
   }

 public function performSurgery(){
           echo "Doctor is performing surgery.";
    }
}
?>