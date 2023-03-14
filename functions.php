<?php

//Fuction Declaration
function hello_world(){
    echo "Hello world\n";
}

// Calling the function
hello_world();

// Passing values to a function
function greet($firstname, $lastname){
    echo "helloe $firstname $lastname";
}

greet('John', 'Smith');


//returning a Value from a Function
function capitalize($value){
    return mb_strtoupper($value);
}

$animal = capitalize('dog');
echo "$animal\n";

//Nameless Functions Closures
$sum = function($a, $b){
    return $a + $b;
};
echo $sum(1, 2). "\n";