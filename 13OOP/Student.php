<?php

require_once 'Person.php';

class Student extends Person
{
    public $average;

    function __construct($id, $name, $average)
    {
        parent::__construct($id, $name);
        $this->average = $average;
    }

    
}
