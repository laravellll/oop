<?php

class parentt{
    public function name(){
        echo "my name is ariq<br>";
    }
}

class childd extends parentt {
   public function sum(){
       echo 'sum of a number';
   }
}

new parentt;

$obj=new childd;
$obj->name();
$obj->sum();






