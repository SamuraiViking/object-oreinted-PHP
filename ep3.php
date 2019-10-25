<?php 

class Person {
    private $name;
    private $age;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
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

$bob = new Person("bob");
$kid = new Child("kid");
echo $kid->getName();