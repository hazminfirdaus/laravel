<?php

  //while loop
  $time_served = 0;

  while ($time_served < 10) {
    $time_served++;
    echo '<p>The prisoner has served ' . $time_served . ' years. </p>';
  }

  echo '<hr>';

  //do..while loop
  $time_served = 0;

  do {
    echo '<p>The prisoner has served ' . $time_served . ' years. </p>';
    $time_served++;
  } while ($time_served < 10);

  echo '<hr>';

  //for loop
  for ($i = 1; $i <= 5; $i++) {
    echo  '<p>The prisoner has ' . $i . ' more years to serve. </p>';
  }

  for ($i = 5; $i > 0; $i--) {
    echo 'The prisoner has ' . $i . ' more years to serve' . '<br/>';
  }
  

  echo '<hr>';

  //continue & break
  for ($i = 10; $i > 0; $i--) {
    echo '<p>The prisoner has ' . $i . ' more years to serve.</p>';

    if ($i > 5) {
      continue;
    }
    
    echo '<p>Going to parole hearing...';

    if ($i === 2) {
      echo '<p>Paroled!</p>';
      break;
    }
  }
?>