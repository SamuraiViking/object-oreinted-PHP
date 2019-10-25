<?php 

class Shape {
    private $name;
    private $sides;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Circle extends Shape {
    private $radius;
    public function __construct($name, $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }
    public function getArea()
    {
        return 3.14 * $this->radius ** 2;
    }
}

$c = new Circle("Circle", 10);
echo $c->getArea();



