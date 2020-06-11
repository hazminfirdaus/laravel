<?php

require_once 'DB.php';
require_once 'DB_functions.php';

$success = connect('localhost', 'games', 'root', 'rootroot');

var_dump($_GET);

$query = ('
  SELECT * 
  FROM `games`
');

$games = select($query);

header('Content-type: application/json');

echo json_encode($games);