<?php

$party = [
  'bilbo' => 'Bilbo Baggins',
  'frodo' => 'Frodo Baggins',
  'ring' => 'The One Ring'
];

function init_party($party){
  return $party;
}

function add_gandalf($party){

  $party['gandalf'] = 'Gandalf the Grey';

  return $party;
}

function remove_bilbo($party){

  unset($party['bilbo']);

  return $party;
}

function add_sam($party){

  $party['sam'] = 'Samwise Gamgee';

  return $party;
}

function remove_gandalf($party){

  unset($party['gandalf']);

  return $party;
}

function leave_hobbiton($party){

  $party = array_merge($party, [
    'merry' => 'Meriadoc Brandybuck',
    'pippin' => 'Peregrin Took'
    ]);

  return $party;
}

function go_to_bree($party){

  $party['strider'] = 'Strider';

  return $party;
}

function go_to_weathertop($party){
  $party = array_merge($party, ['Witch King of Angmar',
  'Nazgûl #2',
  'Nazgûl #3',
  'Nazgûl #4',
  'Nazgûl #5',
  'Nazgûl #6',
  'Nazgûl #7',
  'Nazgûl #8',
  'Nazgûl #9'
  ]);

  return $party;
}

function meet_arwen($party){
  $party['arwen'] = 'Arwen Undómiel';

  $party = array_splice($party, -10, 9);
  
  return $party;
}

function go_to_rivendell($party){
  unset($party['arwen']);

  $party = array_merge($party, [
    'gandalf' => 'Gandalf the Grey',
    'boromir' => 'Boromir',
    'legolas' => 'Legolas',
    'gimli' => 'Gimli'
  ]);

  $party['strider'] = 'Aragorn';

  return $party;
}

function go_to_moria($party){

  unset($party['gandalf']);

  return $party;
}

function go_to_falls_of_rauros($party){

  $party = array_merge($party, array_fill(0, 1000, 'Orc'));

  unset($party['boromir']);

  return $party;
}

function break_fellowship($party){
  // echo 'lol ' . count($party);
  // var_dump($party);
  $mordor_party = [];
  $mordor_party = [
    'frodo' => 'Frodo Baggins',
    'sam' => 'Samwise Gamgee',
    'ring' => 'The One Ring'
  ];


  $hunting_party = [];
  $hunting_party = [
    'strider' => 'Strider',
    'legolas' => 'Legolas',
    'gimli' => 'Gimli'
  ];

  $hungry_party = [];
  $hungry_party = array_diff_key($party, $mordor_party, $hunting_party);

  $parties = array($mordor_party, $hunting_party, $hungry_party);

  return $parties;
}