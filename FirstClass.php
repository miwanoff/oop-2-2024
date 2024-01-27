<?php
class FirstClass {

    public function GetName() {
        echo "First\n";
    }

    public function PrintSelf() {
        echo "PrintSelf: ";
        self::GetName();
    }

    public function PrintStatic() {
        echo "PrintStatic: ";
        static::GetName();
    }

}

class SecondClass extends FirstClass {

    public function GetName() {
        echo "Second\n";
    }

    public function PrintParent2() {
        echo "PrintParent: ";
        parent::GetName();
    }

}

$x = new SecondClass();
$x->PrintSelf();
$x->PrintStatic();
$x->PrintParent2();