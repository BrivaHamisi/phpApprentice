<?php

echo "Helllo World!\n";
echo "I am a string on a new line\n";
echo "No semi-colon is a no-no\n";
echo "PHP"; echo " Apprentice\n";

$greeting = 'Hello World!/n';
echo $greeting;

$_var = "I am a variable with an uderscore!";
$Var = "I am a variable with a Capital letter!";
$var = " I am a variable";

$int = 1;
$float = 100.10;
$bool = true;
$string = "I am a string\n";

$number = 1;
$number = "one";

echo $number;

$a = 1;
$b = 2;

echo $a + $b;
echo $b - $a;

echo $a * $b;
echo $b / $a;

$mod = 10 % 5;
echo $mod;

echo 5 ** 2;

$firstname = "Joey";
$lastname = "Johnson";

echo $firstname;
echo $lastname;

echo "Jacob \n Jones\n";

$firstname = 'Cindy';
echo "$firstname Smith\n";

$firstname = 'Jenny';
$lastname = 'Madison';

$fullname = $firstname . $lastname;

echo $fullname;

$one = 1;
$two = 2;

echo $one == $two;

//Both values must be true

$a = true;
$b = true;
$c = false;

$a && $b; //returs true
$a && $c; //returns false


//Checks if either value is True
$a = true;
$b = false;
$c = false;
$d = true;

$a || $b; //retuns true
$b || $c; //returns false
$a || $d; //returns true

//using an exclamation points returns the opposite value
$d = true;
echo !$d; //output fale


//If statement in PHP
$animal = 'cow';
if ($animal  == 'cow'){
    echo "Moooooo.... \n";
}

$animal = 'bird';
if ($animal == 'dog'){
    echo "Woof! 🐶\n";
}
elseif($animal == 'cat'){
    echo "Meow!? 🐱\n";
}
elseif($animal == 'bird'){
    echo "Chirp! 🐦\n";
}else{
    echo " I am not a dog, cat or bird\n";
}

//Switch in PHP
$food = 'apples';
switch($food){
    case 'apples':
        echo "Eating an apple\n";
        break; 
    case 'oranges':
        echo "Eating an orange\n";
        break;
    case 'peaches':
        echo "Eating  peach\n";
        break;
    default:
    echo 'No food, I am hungry\n';
}

//switch without braak and excuting both cases
$drink = 'water';
switch($drink){
    case 'water':
        echo "Drinking Water\n";
    case 'tea':
        echo "Drinking tea\n";
        break;
}

//single line conditionals in PHP(Ternary)
$language = 'english';
echo $language == 'spanish' ? "hola\n" : "hello\n";


//chaining multiple checks in a row
$IExist = "Variable exists\n";
echo $IDonotExist ?? $IExist ?? "Neither variable is set\n";


// While loop in PHP
$num = 5;
while ($num > 0){
    echo " While loop $num\n";
    --$num;
}


