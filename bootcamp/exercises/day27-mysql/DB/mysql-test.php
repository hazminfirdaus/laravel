<?php

require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'Country.php';

$success = connect('localhost', 'world', 'root', 'rootroot');

$results = select('
  SELECT * 
  FROM `country` 
  WHERE `population` > ?
    AND `continent` = ?
  ORDER BY `population` DESC
  LIMIT 0, 10;
', [20000000, 'Europe'], 'Country');

// var_dump($results);

foreach ($results as $country) {
  echo $country->getPopulationFormatted() . '<br/>';
}
// header('Content: application/json';)
// echo json_encode($results);