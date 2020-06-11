<?php

class Dice
{
  public $side = null;

  public function roll()
  {
    $this->side = rand(1, 6);
  }
}