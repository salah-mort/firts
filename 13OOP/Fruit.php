<?php


trait message1{
    public function msg1(){
        echo "aaa";
    }
}

trait message2{
    public function msg1(){
        echo "aaa";
    }
}

class Fruit
{
    public $name;
    private $color;
    use message1;
    use message2;

    //const XX = "aa";
     //const XXXL; 

    function __construct($name, $color)
    {
        //const XX = "aa";
        $this->name = $name;
        $this->color = $color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$f = new Fruit("Apple","RED");
$f->msg1();

