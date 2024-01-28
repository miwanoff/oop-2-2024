<?php

interface CanSay
{
    public function say();
}

interface Run
{
    public function speed();
	public function run();
}


abstract class Animal implements CanSay, Run
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    // abstract public function say();

    public function getName()
    {
        return $this->name;
    }
}

class Robot implements CanSay
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

	public function info(){
		echo "I`m Robot {$this->name}";
	}
	

    public function say()
    {
        echo "I`m Robot {$this->name}";
    }
}

//$an = new Animal();

class Cat extends Animal
{

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function say()
    {
        echo "meow-meow";
    }
}

class Dog extends Animal
{

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function say()
    {
        echo "woof-woof!";
    }
}
// $dog1 = new Dog("Jack");
// $dog1->say()."\n";
// $cat1 = new Cat("Lusi");
// $cat1->say()."\n";
$arr = [new Dog("Jack"), new Dog("Box"), new Cat("Lusi"), new Cat("Mina")];

foreach ($arr as $value) {
    if ($value instanceof Animal) {
        print($value->getName() . " say:\n");
        print($value->say() . "\n");
    }
}

$robot = new Robot ("Robert");
//$robot->say();
$robot->info();