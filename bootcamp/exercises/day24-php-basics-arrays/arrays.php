<?php

  $cars_i_want = [];

  $scars_i_want [] = "Aston Martin";
  $cars_i_want [] = "Bugatti";
  $cars_i_want [] = "Ferari";
  $cars_i_want [] = "Lamborghini";
  $cars_i_want [] = "Maserati";
  $cars_i_want [] = "Mercedes";
  $cars_i_want [] = "Porsche";
  $cars_i_want [] = "Skoda";

  echo '<br/>';

  echo '<p>For myself I would buy ' . $cars_i_want[1] . '.</p><br>';

  echo '<p>For my spouse I would buy ' . $cars_i_want[3] . '.</p><br>';

  $cars_i_want[4] = "Smart";

  var_dump($cars_i_want);

  echo '<p>Each of my kids will get a ' . $cars_i_want[4] . '.</p><br>';

  print '<ul>';

  foreach ($cars_i_want as $car) {
    // code to run for each of the items in an array
    // the $value variable holds the value of the current item
    print '<li>' . $car . '</li>';
  }

  print '</ul>';

  $car_prices = [
    'Skoda Octavia' => 270000,
    'Volkswagen Golf' => 170000,
    'BMW X6' => 380000,
    'Porsche 911' => 1150000
  ];

  print 'You can have a Porsche for just ' . $car_prices['Porsche 911'] . ' CZK.<br/>';

  echo '</br>';

  foreach ($car_prices as $car => $price) {
    // code to run for each of the items in an array
    // the $value variable holds the value of the current item
    // the $key variable holds the value of the current item's key

    print 'The price of ' . $car . ' is ' . $price . ' CZK.<br/>';
}
?>