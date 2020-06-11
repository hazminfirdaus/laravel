<?php

  define('MY_SERVER', 'Apache');
  define('MY_OS', 'Windows');

  $first_name = 'Hazmin';
  $last_name = 'Chik';

  echo 'First name: ' . $first_name . '<br/>' . 'Surname: ' . $last_name;

  echo '<br/>';

  $year_of_birth = 1993;
  $height = 168;

  echo 'Year of birth: ' . $year_of_birth . '<br/>' . 'Height: ' . $height;

  echo '<br/>';

  echo 'This server is running on ' . MY_SERVER . '.';

  echo '<br/>';

  echo 'My operating system is ' . MY_OS . '.';

  echo '<br/>';

  function greet(){
   echo 'Hello World!';
  }
  
  greet();

  function greet2($whom){
    echo '<p>Hello ' . $whom . '!</p>';
  }

  greet2('Prague');

  function greet3($whom){
    return '<p>Hello ' . $whom . '!</p>';
  }

  echo greet3('Prague');
?>