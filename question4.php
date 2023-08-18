<?php

class Animal {
    public function makeSound() {
        echo "Some sound\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof woof!\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow meow!\n";
    }
}

class Cow extends Animal {
    public function makeSound() {
        echo "Moo moo!\n";
    }
}


$animals = [
    new Dog(),
    new Cat(),
    new Cow(),
    new Animal()
];

foreach ($animals as $animal) {
    $animal->makeSound();
}

?>
