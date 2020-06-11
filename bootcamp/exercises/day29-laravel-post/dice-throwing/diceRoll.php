<?php

require_once 'Dice.php';

$dice = new Dice;
$dice->roll();
var_dump($dice);

'<br/>';

var_dump($_POST);

// $number = isset( $_POST['number'] ) ? $_POST['number'] : '';
// $email = $_POST['email'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dice Roll</title>
</head>
<body>
  
  <form action="" method="post">

    <input type="text" name="number">
    <br>
    <br>

    <input type="submit" value="Roll!">

  </form>
</body>
</html>