<?php

require_once "Staff.php";
require_once "SurgeonInterface.php";
require_once "EmergencyInterface.php";
require_once "Doctor.php";
require_once "Nurse.php";
require_once "HospitalManager.php";

$nurse3=new Nurse("nara",3,1300,"morning");
$nurse3->setSalary(1200);
$nurse3->showSalary();
echo $nurse3->getSalary();
//$nurse3->salary; error private
echo "<br>";

$doctor1=new Doctor("hamza",1,2000,"cardiology");
$doctor2=new Doctor("jad",2,1000,"neurology");

$nurse1=new Nurse("sara",1,400,"night");
$nurse2=new Nurse("noor",2,600,"morning");

$hospitalManager=new HospitalManager();

$staffMembers=[$doctor1,$doctor2,$nurse1,$nurse2];
   
foreach($staffMembers as $staff ){

 $hospitalManager->checkWork($staff);
  

}
 
?>