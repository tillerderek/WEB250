<?php

class RoundCookie {
// class properties
  var $weight;
  var $color;
  var $icing;

// class methods (functions)
  function decorate() {
    return "drizzle " . $this->icing;
  }

  function consume() {


  }
}

// create a new RoundCookie object (instantiation)
$cookie1 = new RoundCookie;
$cookie1->weight = "2 oz.";
$cookie1->color = "green";
$cookie1->icing = "cream cheese icing";

$cookie2 = new RoundCookie;
$cookie2->weight = "24 oz.";
$cookie2->color = "red";
$cookie2->icing = "no icing";

echo "<p>My first cookie weighs ". $cookie1->weight . " it is " . $cookie1->color . " and is covered with " . $cookie1->icing . ".</p>";

echo "<p> I will " . $cookie1->decorate() . " my icing.</p>";

echo "<p>My second cookie weighs ". $cookie2->weight . " it is " . $cookie2->color . " and is covered with " . $cookie2->icing . ".</p>";


