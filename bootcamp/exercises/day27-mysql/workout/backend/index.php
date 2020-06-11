<?php

// include the file with the data
// (pretend that some amazing database were created)
include 'data.php';

require_once 'Celebrity.php';

// make objects from data

$celebrities = [];

// loop through the original array (of arrays)
foreach ($data as $celebrity_array) {

  // create a new Celebrity object
  $celebrity = new Celebrity;

  // load its properties from the array
  $celebrity->loadFromArray($celebrity_array);

  // add it to the array of Celebrity object
  $celebrities [] = $celebrity;
}

// send proper JSON header
header('Content-type: application/json');

// output JSON string with the prepared data
echo json_encode($celebrities);