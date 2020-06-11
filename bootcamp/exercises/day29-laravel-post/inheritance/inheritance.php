<?php

require_once 'Match.php';
require_once 'FootballMatch.php';

$generic_match = new Match('2020-06-04 14:00:00');

var_dump($generic_match);

echo 'The match ends at ' . $generic_match->getEstimatedEnd();