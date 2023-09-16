<?php

class Bicycle
{

  public static $instance_count = 0;
  public $brand;
  public $model;
  public $year;
  public $category;
  public $description = 'Used bicycle';
  private $weight_kg = 0.0;
  protected static $wheels = 2;

  public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

  public static function create() {
    $class_name = get_called_class();
    $obj = new $class_name;
    self::$instance_count++;
    return $obj; 
  }

  public function name()
  {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  public static function wheel_details()
  {
    $wheel_string = static::$wheels == 1 ? "1 wheel" : static::$wheels ."wheels";
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
  protected static $wheels = 1;

  public function bug_test() {
    return $this->weight_kg;
  }
}

$bike1 = new Bicycle;
$bike1->brand = 'Salsa';
$bike1->model = 'Warbird';
$bike1->year = '2020';

echo 'Bike count: ' . Bicycle::$instance_count . '<br/>';
echo 'Unicycle count: ' . Unicycle::$instance_count . '<br/>';

$bike = Bicycle::create();
$uni = Unicycle::create();

echo 'Bike count: ' . Bicycle::$instance_count . '<br/>';
echo 'Unicycle count: ' . Unicycle::$instance_count . '<br/>';

echo '<hr/>';
echo 'Categories: ' . implode(', ', Bicycle::CATEGORIES) . '<br/>';
$bike1->category = Bicycle::CATEGORIES[0];
echo 'Category: ' . $bike1->category . '<br/>';

echo '<hr/>';

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
