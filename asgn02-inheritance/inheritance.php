<?php

class Animal
{
  public $species;
  public $color;

  public function eat()
  {
    echo "A {$this->species} has to eat to survive";
  }

  public function describe()
  {
    echo "A {$this->species} is {$this->color}";
  }
}

class Mammal extends Animal
{
  private $isWarmBlooded = true;

  public function getIsWarmBlooded()
  {
    return $this->isWarmBlooded;
  }

  protected function milk()
  {
    echo "A {$this->species} can produce milk for its offspring";
  }

  public function getMilkMessage()
  {
    return $this->milk();
  }
}

class Bird extends Animal
{
  private $hasBeak = true;

  public function getHasBeak()
  {
    return $this->hasBeak;
  }

  protected function eggs()
  {
    echo "A {$this->species} lays eggs to reproduce";
  }

  public function getEggsMessage()
  {
    return $this->eggs();
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
if ($mammal1->getIsWarmBlooded()) {
  echo $mammal1->describe() . " and is warm-blooded. <br>";
}
echo $mammal1->eat() . "<br>";
echo $mammal1->getMilkMessage() . "<br>";
echo $mammal1->describe() . "<br>";

$bird1 = new Bird;
$bird1->species = 'Flamingo';
$bird1->color = 'Pink';
if ($bird1->getHasBeak()) {
  echo $bird1->describe() . " and has a beak. <br>";
}
echo $bird1->eat() . "<br>";
echo $bird1->describe() . "<br>";
echo $bird1->getEggsMessage();

?>
