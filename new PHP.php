<?php
class Dog{
 public $gender;
 public $breed;
 public $age;

 public function __construct($gender,$breed,$age){
 	$this->gender = $gender;
 	$this->breed = $breed;
 	$this->age = $age;
 }
public function dog(){
	return "this dog is a " . $this->gender . "" . $this->breed . "" .$this->age ."so hello to your new pet";
}  
}

$me = new dog("female,boxer,4");

echo $me->dog();



?>