<?php

  //variables & data types
  $my_name = 'Hazmin';
  $my_height = '1.7';

  var_dump($my_name);
  var_dump($my_height);

  //functions#1
  function headline($text) {
    echo '<h1>' . $text . '</h1>';
  }

   headline('My Website');

  //functions#2
  function headlines($text) {
    return '<h1>' . $text . '</h1>';
  }

  echo headlines('My Website');

  //functions#3
  $inches = 12;

  function inchesToCentimeters($inches) {
    $cm = $inches * 2.54;
    return '<h1>'. $cm .'</h1>';
  }

  echo inchesToCentimeters($inches);

  //functions#4
  $celcius = 100;

  function celciusToFahrenheit($celcius) {
    $fahrenheit = (9/5) * $celcius + 32;
    return '<h1>'. $fahrenheit .'</h1>';
  }

  echo celciusToFahrenheit($celcius);

  //conditions#1
  $temperature = 36.5;

  function isHealthy($temperature) {
    if ($temperature && 'f') {
      ($temperature - 32) * 5/9;
      
      if ($temperature === 37 && 'c') {
        return 'true';
      } else {
        return 'false';
      }
    }
  }

  echo isHealthy($temperature);

  echo '<br>';

  //ternary operator
  $number = 42;

  function evenOrOdd($number) {
    if ($number % 2 === 0) {
      return 'even';
    } else {
      return 'odd';
    }  

    Echo 'The number is ' . ($number ? 'even' : 'odd');
  }

  echo evenOrOdd($number);

  //concatenation #1
  $weekday = 'Friday';

  function sayWeekday($weekday) {
    echo '<p>Today is ' . $weekday . '.</p>';
  }

  sayWeekday($weekday);

   //concatenation #2
   $year_of_birth = 1993;

   function sayBirthYear($year_of_birth) {
     $this_year = 2020;
     echo '<p>I was born in ' . $year_of_birth . ' so this year I am celebrating my ' . ($this_year - $year_of_birth) . 'th birthday.</p>';
   }
   
   sayBirthYear($year_of_birth);

?>