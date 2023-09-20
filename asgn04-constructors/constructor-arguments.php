<?php

class Bird
{

  public $commonName;
  public $latinName;

  public function __construct($args = [])
  {
    $this->commonName = $args['commonName'] ?? NULL;
    $this->latinName = $args['latinName'] ?? NULL;
  }
}

$flycatcher = new Bird(['commonName' => 'Acadian Flycatcher', 'latinName' => 'Turdus migratorius']);

echo "Common name: " . $flycatcher->commonName . "<br>";
echo "Latin name: " . $flycatcher->latinName . "<br>";
echo "<hr>";

$towhee = new Bird(['commonName' => 'Eastern Towhee', 'latinName' => 'Pipilo erythrophthalmus']);

echo "Common name: " . $towhee->commonName . "<br>";
echo "Latin name: " . $towhee->latinName . "<br>";

?>
