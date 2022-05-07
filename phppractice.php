<?php

class person{
    public $sumu;
    public $age;
    public $x;

    public function __construct($a,$b,$v)
    {

       $this->name=$a;
        $this->age=$b;
        $this->x=$v;
    }
   
    public function name(){
        echo  $this->name."<br>";
        echo  $this->age."<br>";
        echo  $this->x."<br>";
    }
}

$person=new person('string',43,323);
$person->name();
