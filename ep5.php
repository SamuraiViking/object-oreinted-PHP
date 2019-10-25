<?php
class Person {
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Business {
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }
    public function hire(Person $person)
    {
        $this->staff->add($person);
    }
    public function staffMembers()
    {
        return $this->staff->members();
    }
}

class Staff {
    protected $members = [];
    public function add(Person $person)
    {
        $this->members[] = $person;
    }
    public function members()
    {
        return $this->members;
    }
}

$kevin = new Person("Kevin");
$staff = new Staff;
$prepNetwork = new Business($staff);
$prepNetwork->hire($kevin);
var_dump($prepNetwork->staffMembers());

