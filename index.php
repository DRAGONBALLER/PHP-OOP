<?php

class Dog{
	public $gender;
	public $breed;
	public $name;
	public $age;
	
}

class Cat{
	public $gender;
	public $breed;
	public $name;
	public $age;
}

class Bird{
	public $gender;
	public $breed;
	public $name;
	public $age;
}

$dog1 = new Dog();
$dog2 =	new Dog();
$dog3 = new Dog();

$cat1 = new Cat();
$cat2 = new Cat();
$cat3 = new Cat();

$bird1 = new Bird();
$bird2 = new Bird();
$bird3 = new Bird();

class Dog{
	public $gender = "male";
	public $breed = "shi tsu";
	public $name = "mylo";
	public $lastname = "goldson";
}
class Cat{
	public $gender = "female";
	public $breed = "best breed";
	public $name = "circle";
	public $lastname = "goldson";

}
class Bird{
	public $gender = "male";
	public $breed = "crow";
	public $name = "superfly";
	public $lastname = "goldson";
}
$dog1 = new Dog();

print $dog1­>name;

$cat1 = new Cat();

print $cat1­>name;

$bird1 = new Bird();

print $bird1­>name;

public function myMethod($argument,$another){

}
public function myMethod($argument,$another){
	
}
public function myMethod($argument,$another){
	
}



class Dog {

public $firstName;

public $lastName;

public $breed;

function __construct($title, $firstName, $lastName, $breed) {

$this­>firstName = $firstName;

$this­>lastName = $lastName;

$this­>breed = $breed;

}

function getName() {

return “{$this­>firstName}” .

“{$this­>lastName}”;

}

}




class Cat {

public $firstName;

public $lastName;

public $breed;

function __construct($title, $firstName, $lastName, $breed) {

$this­>firstName = $firstName;

$this­>lastName = $lastName;

$this­>breed = $breed;

}

function getName() {

return “{$this­>firstName}” .

“{$this­>lastName}”;

}

}



class Bird {

public $firstName;

public $lastName;

public $breed;

function __construct($title, $firstName, $lastName, $breed) {

$this­>firstName = $firstName;

$this­>lastName = $lastName;

$this­>breed = $breed;

}

function getName() {

return “{$this­>firstName}” .

“{$this­>lastName}”;

}

}

$dog1 = new Dog(“Mylo”, “Goldsson”, “ShiTsu”);

print “Dog 1: {$dog1­>getName()}\n;

$cat1 = new Cat(“circle”, “Goldsson”, “BestBreed”);

print “Cat 1: {$cat1­>getName()}\n;

$bird1 = new Bird(“SuperFly”, “Goldsson”, “Crow”);

print “Bird 1: {$bird1­>getName()}\n;


$a = false;
$b = 0;

if (is_bool($a) === true){
	echo "yes, this is a boolean ";
}
// is_bool checks if a variable is a boolean

if(is_bool($b) === false ){
	echo "no, this is not a boolean";
}

$values = array(false, true, null, 'abc', '23', 23, '23.5', 23.5, '', '', ' ','0','0');
foreach ($values as $value){
	echo "is_string(";
	var_esport($value);
	echo ") = ";

echo var_dump(is_string($value));
}








?>