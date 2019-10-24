<?php 

class Task {
    public $description;
    public $title;
    public function __construct($description, $title)
    {
        $this->description = $description;
        $this->title = $title;
    }

    public function complete() 
    {
        $this->completed=true;
    }
}


$task = new Task('Learn OOP', "nice title");
var_dump($task->title);