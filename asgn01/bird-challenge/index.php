<?php

class Bird
{

  var $common_name;
  var $food;
  var $nest_placement;
  var $conservation_level;

  function song($song)
  {
    return $this->common_name . $song;
  }

  function canFly($fly)
  {
    return $this->common_name . $fly;
  }

}

$bird1 = new Bird;
$bird1->common_name = 'Blue Bird';
$bird1->food = 'worms';
$bird1->nest_placement = 'bushes';
$bird1->conservation_level = 'high';

$bird2 = new Bird;
$bird2->common_name = 'Hawk';
$bird2->food = 'rats';
$bird2->nest_placement = 'high canopy';
$bird2->conservation_level = 'medium';

echo $bird1->common_name . "<br />";
echo "eats: " . $bird1->food . "<br />";
echo "makes it's nest in: " . $bird1->nest_placement . "<br />";
echo "conservation level is: " . $bird1->conservation_level . "<br />";
echo $bird1->song(" sings a pretty song") . "<br />";
echo "<br />";
echo $bird2->common_name . "<br />";
echo "eats: " . $bird2->food . "<br />";
echo "makes it's nest in: " . $bird2->nest_placement . "<br />";
echo "conservation level is: " . $bird2->conservation_level . "<br />";
echo $bird2->song(" sings a crazy ass song") . "<br />";
?>
