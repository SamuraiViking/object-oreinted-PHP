<?php

class Person {
    public $name;
    public $age;
    public function __construct($name)
    {
        $this->name=$name;
    }

    public function setAge($age)
    {
        if($age < 18)
        {
            throw new Exception("Too Young");
        }
        $this->age = $age;
    }
}

$john = new Person('John Doe');
$john->setAge(1);

var_dump($john->age);

