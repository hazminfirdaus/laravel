<?php

require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'Country.php';

$success = connect('localhost', 'world', 'root', 'rootroot');

function getPageOfCities($page_nr)
{
  $limit = 20;
  $offset = (($page_nr -1) * $limit);

  $query = "
    SELECT *
    FROM `city`
    LIMIT {$offset}, {$limit}
  ";
  
  $cities = select($query);

  return $cities;
}

$page_of_cities = getPageOfCities(1);
var_dump($page_of_cities);

$page_of_cities = getPageOfCities(3);
var_dump($page_of_cities);