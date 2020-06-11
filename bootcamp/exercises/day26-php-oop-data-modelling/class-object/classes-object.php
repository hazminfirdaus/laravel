<?php

require_once 'User.php';

$steve = new User('steve', 'Bitch');

// $steve->id = 1;
// $steve-> username = 'steve';
// $steve->name = 'Stephen';

// var_dump($steve);

$bob = new User('bob', 'Robert');

$steve->dump();
$bob->dump();