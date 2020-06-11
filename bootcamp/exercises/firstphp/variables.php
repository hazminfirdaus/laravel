<?php 

  define('MY_SERVER', 'Apache');

  $my_greeting = '<p>Hello, world!</p>';

  // debug, to see the data type 
  $a = '12';

  var_dump($a);

  var_dump($a + 3);

  $b = (float)$a;

  var_dump($b);
  // exit();

  function my_first_function($my_greeting) {
    echo $my_greeting;

    $my_greeting = 'Hello, Ming.';

    echo MY_SERVER;

    echo $my_greeting;
  }

  echo $my_greeting;

  echo '<br/>';

  my_first_function($my_greeting);

  echo '<br/>';

  unset($my_greeting);

  echo $my_greeting;

?>