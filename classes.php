<?php
class car{

}

//creating the instnce of the class
$car = new Car();

//A class can define attributes and methods. An attribute is a piece of data stored on the class instance. Yu can defie n attribute by adding the word public  and a varible name inside the class definition
class Bicycle{
    public $color;
}

//Then when you create an instance of the class, you can set and use the attribute on the instance using
$bike = new Bicycle();
$bike->color = 'Blue';
echo $bike->color . "\n";


$redBike = new Bicycle();
$redBike->color = 'Red';
echo $redBike->color . " Bike Objects\n";

//A method is a function attached to a class
class Tricycle{
    public $color;

    public function echoColor(){
        echo $this->color . "\n";
    }
}