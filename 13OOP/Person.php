<?php

class Person{
    public $id;
    public $name;

    function __construct($id,$name)
    {
        $this->id=$id;
        $this->name=$name;
    }

    function __toString()
    {
        return "Id = ". $this->id. " Name = ". $this->name;
    }
}