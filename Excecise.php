<?php

class fruit{
    public $name;
    public $colour;


    public function setname($name){
        $this->name = $name;
    }

    public function getname($name){
       return $this-> name;

    }

    public function set_color($color) {
        $this->color = $color;
    }

    public function get_color() {
        return $this->color;
    }

}

$apple = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Red");

$pinapple = new Fruit();
$pinapple->set_name("Pineapple");
$pineapple->setcolour("Orange");




?>