<?php

$i = 1;

while ($i <= 100) {
  if ($i % 15 == 0) {
    echo 'FizzBuzz';
  } elseif ($i % 5 == 0) {
      echo 'Buzz';
  } elseif ($i % 3 == 0) {
      echo 'Fizz';
  } else {
      echo $i;
  }
  echo '<br/>';
  $i++;
}