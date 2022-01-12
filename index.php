<?php

function myBoolean() {
    return true;
}

//Exo2:
function name(String $name) {
    echo "Hello $name";
}
name('Dehainaut');
echo "<br><br>";

//Exo3:
function identity(String $name, String $firstName) {
    echo "Hello $name $firstName";
}
identity('Dehainaut', 'Angélique');
echo "<br><br>";

//Exo4:
function number(Int $number1 , Int $number2) {
    if($number1 > $number2) {
        echo "$number1 est plus grand que $number2";
    }
    elseif ($number1 < $number2) {
        echo "$number1 est plus petit que $number2";
    }
    elseif ($number1 === $number2) {
        echo "$number1 est égal à $number2";
    }
}

number(2,5);
echo "<br><br>";

//Exo 5:
function test (Int $number, String $text) {
    echo "$number $text";
}
test(3, "chats");
echo "<br><br>";

//Exo 6:
function person (String $name,String $firstName, Int $age) {
    echo "Bonjour" .$name .$firstName .", tu as ".$age. " ans." ;
}
person("Dehainaut", "Angélique", 33);
echo "<br><br>";

//Exo7:

function sex (Int $age, String $genre) {
    $genre1= "homme";
    $genre2 = "femme";
    if ($age >= 18 && $genre === $genre1) {
        echo " Vous êtes un homme et vous êtes majeur";
    }
    elseif ($age < 18 && $genre === $genre1) {
        echo "Vous êtes un homme et vous êtes mineur";
    }
    if ($age >= 18 && $genre === $genre2) {
        echo "Vous êtes une femme et vous êtes majeur";
    }
    elseif ($age < 18 && $genre ===$genre2) {
        echo "Vous êtes une femme et vous êtes mineur";
    }
}

//Exo 8:
function numbers (Int $number1 = 5, Int $number2 = 3, Int $number3 = 10):Int {
    return $number1 + $number2 + $number3 ;
}
echo numbers();


