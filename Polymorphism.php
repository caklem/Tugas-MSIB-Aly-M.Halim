<?php

abstract class person{
    abstract public function greet();
}

class English extends person{
    public function greet(){
        return 'Hello!';
    }
}

class German extends person{
    public function greet(){
        return 'Hallo!';
    }
}

class French extends person{
    public function greet(){
        return 'Bonjour!';
    }
}

function greeting($people){
    foreach ($people as $person){
        echo $person->greet() . '<br>';
    }
}

$people = [
    new English(),
    new German(),
    new French()
];

greeting($people);