<?php

class Bicycle {

  var $brand;
  var $model;
  var $year;
  var $description;
  var $weight_kg;

  function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  function weight_lbs() {
    return round(floatval($this->weight_kg) * 2.2046226218) . " lbs";
  }

  function set_weight_lbs($value) {
    $this->weight_kg = round(floatval($value) / 2.2046226218) . " lbs";
  }

  function weight_kg() {
    return $this->weight_kg . " kg";
  }

}

$salsa = new Bicycle;
$salsa->brand = 'Salsa';
$salsa->model = 'Warbird';
$salsa->year = '2015';
$salsa->weight_kg = 10.0;

$jamis = new Bicycle;
$jamis->brand = 'Jamis';
$jamis->model = 'Dragon Slayer';
$jamis->year = '2017';
$jamis->weight_kg = 12.0;

echo $salsa->name() . "<br />";
echo $jamis->name() . "<br />";
echo $salsa->weight_kg() . "<br />";
echo $salsa->weight_lbs() . "<br />";
echo $jamis->weight_kg() . "<br />";
echo $jamis->weight_lbs() . "<br />";
$salsa->set_weight_lbs(20);
$jamis->set_weight_lbs(25); 
echo $salsa->weight_kg . "<br />";
echo $jamis->weight_kg . "<br />";
?>