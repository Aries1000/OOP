<?php

//When a code or function is deprecated, it means that it's no longer recommended for use. It's typically a signal from the developers or maintainers of a software library or programming language that there are newer and better ways to achieve the same functionality, and the old method may be removed in future versions.

interface Animal {
    public function makeSound();
}


trait CanFly {
    public function fly() {
        echo "Flying...\n";
    }
}


class Bird implements Animal {
    
    public function makeSound() {
        echo "Chirp!\n";
    }
}


class Parrot implements Animal {
    
    use CanFly;

    
    public function makeSound() {
        echo "Squawk!\n";
    }
}


$bird = new Bird();
$bird->makeSound(); 

$parrot = new Parrot();
$parrot->makeSound(); 
$parrot->fly(); 



?>