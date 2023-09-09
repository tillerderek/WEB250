<?php

class Bicycle
{

  public $brand;
  public $model;
  public $year;
  public $description = 'Used bicycle';
  private $weight_kg = 0.0;
  protected $wheels = 2;

  public function name()
  {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  public function wheel_details()
  {
    $wheel_string = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
    return "It has " . $wheel_string . ".";
  }

  public function weight_kg()
  {
    return $this->weight_kg . ' kg';
  }

  public function set_weight_kg($value)
  {
    $this->weight_kg = floatval($value);
  }

  public function weight_lbs()
  {
    $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
    return $weight_lbs . ' lbs';
  }

  public function set_weight_lbs($value)
  {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

}

class Unicycle extends Bicycle
{
  protected $wheels = 1;

  public function bug_test() {
    return $this->weight_kg;
  }
}

$bike1 = new Bicycle;
$bike1->brand = 'Salsa';
$bike1->model = 'Warbird';
$bike1->year = '2020';

$uni = new Unicycle;

echo "Bicycle: " . $bike1->wheel_details() . "<br />";
echo "Unicycle: " . $uni->wheel_details() . "<br />";
echo "<hr />";

echo "Set weight using kg<br />";
$bike1->set_weight_kg(1);
echo $bike1->weight_kg() . "<br />";
echo $bike1->weight_lbs() . "<br />";
echo "<hr />";

echo "Set weight using lbs<br />";
$bike1->set_weight_lbs(2);
echo $bike1->weight_kg() . "<br />";
echo $bike1->weight_lbs() . "<br />";
echo "<hr />";

// echo $uni->bug_test();

?>
