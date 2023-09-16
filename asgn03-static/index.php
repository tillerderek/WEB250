<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asgn02 Inheritance</title>
  </head>

  <body>
    <h1>Inheritance Examples</h1>

    <?php
    include 'Bird.php';

    $bird = new Bird;
    echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';

    $fly_catcher = new YellowBelliedFlyCatcher;
    echo '<p>The song of the ' . $fly_catcher->name . ' on breeding grounds is "' . $fly_catcher->song . '".</p>';

    $kiwi = new Kiwi;
    Kiwi::$flying = "no";

    echo "<p>The " . $fly_catcher->name . " " . YellowBelliedFlyCatcher::can_fly() . ".</p>";
    echo "<p>The " . $kiwi->name . " " . Kiwi::can_fly() . ".</p>";

    echo "<p>The " . $fly_catcher->name . " will lay  " . YellowBelliedFlyCatcher::$egg_num . " eggs.</p>";
    echo "<p>The " . $kiwi->name . " will lay  " . Kiwi::$egg_num . " eggs.</p>";
 

    echo "There are: " . Bird::$instance_count .  " Birds.<br/>";
    echo "There are: " . YellowBelliedFlyCatcher::$instance_count . " Yellow Bellied Flycatchers.<br/>";
    echo "There are: " . Kiwi::$instance_count . " Kiwis.<br/>";

    echo "<hr/>";

    $newBird = Bird::create();
    $newFlyCatcher = YellowBelliedFlyCatcher::create();
    $newKiwi = Kiwi::create();

    echo "There are: " . Bird::$instance_count .  " Birds.<br/>";
    echo "There are: " . YellowBelliedFlyCatcher::$instance_count . " Yellow Bellied Flycatchers.<br/>";
    echo "There are: " . Kiwi::$instance_count . " Kiwis.<br/>";


    ?>
  </body>

</html>
