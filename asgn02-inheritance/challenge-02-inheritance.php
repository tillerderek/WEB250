<?php

class Animal
{

  var $species;
  var $color;

  function eat()
  {
    echo "A {$this->species} has to eat to survive";
  }

  function describe()
  {
    echo "A {$this->species} is {$this->color}";
  }

}

class Mammal extends Animal
{

  var $isWarmBlooded = true;

  function milk()
  {
    echo "A {$this->species} can produce milk for its offspring";
  }

}

class Bird extends Animal
{

  var $hasBeak = true;

  function eggs()
  {
    echo "A {$this->species} lays eggs to reproduce";
  }

}

$animal1 = new Animal;
$animal1->species = 'Tiger';
$animal1->color = 'Orange with black stripes';
echo $animal1->eat() . "<br>";
echo $animal1->describe() . "<br>";

$mammal1 = new Mammal;
$mammal1->species = 'Bear';
$mammal1->color = 'Brown, black or white';
$mammal1->isWarmBlooded;
if ($mammal1->isWarmBlooded) {
  echo $mammal1->describe() . " and is warm blooded. <br>";
}
echo $mammal1->eat() . "<br>";
echo $mammal1->milk() . "<br>";
echo $mammal1->describe() . "<br>";


$bird1 = new Bird;
$bird1->species = 'Flamingo';
$bird1->color = 'Pink';
$bird1->hasBeak;
if ($bird1->hasBeak) {
  echo $bird1->describe() . " and has a beak. <br>";
}
echo $bird1->eat() . "<br>";
echo $bird1->describe() . "<br>";
echo $bird1->eggs();



?>
