<?php

//1.
  $movie_name = 'Arrival';

//2.
  $ratings = [
//7.
    'user1' => 69,
    'user2' => 95,
    'user3' => 82
  ];

//3.
  function format_rating($rating)
  {
//4.
   return $rating . ' %';
  }

//5.
//10.
  foreach ($ratings as $user_id => $rating) {
//6.
//7.
    echo get_username($user_id) . ' gave ' . $movie_name . ' a rating of ' . format_rating($rating) . '<br/>';
  }

//8. 
  function get_username($user_id)
  {
//9.
  $user_names = [
    'user1' => 'Bob',
    'user2' => 'Stuart',
    'user3' => 'Kevin'
  ];

  return $user_names[$user_id];
  }

  // echo get_username('user1');


?>