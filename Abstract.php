<?php

abstract class Animal
{
    private $name;
    public function __construct($name) {
		$this->name = $name;
	}
    
    abstract public function say();

    public function getName() {
		return $this->name;
	}
}

//$an = new Animal();

class Cat extends Animal {

	public function __construct($name) {
		parent::__construct($name);
	}

	public function say() {
		echo "meow-meow";
	}
}

class Dog extends Animal {

	public function __construct($name) {
		parent::__construct($name);
	}

	public function say() {
		echo "woof-woof!";
	}
}
// $dog1 = new Dog("Jack");
// $dog1->say()."\n";
// $cat1 = new Cat("Lusi");
// $cat1->say()."\n";
$arr= [new Dog("Jack"), new Dog("Box"), new Cat("Lusi"), new Cat("Mina")];

foreach ($arr as $value) {
	if ($value instanceof Animal){
		print($value->getName()." say:\n");
		print($value->say()."\n");
	}
}