<?php

class Play
{
  public $id = null;
  public $name = null;
  public $img_url = null;
  public $description = null;
  public $rating = null;
  public $released_at = null;

  public function loadFromArray($array)
  {
    $this->id = $array['id'];
    $this->name = $array['name'];
    $this->img_url = $array['img_url'];
    $this->description = $array['description'];
    $this->rating = $array['rating'];
    $this->released_at = $array['released_at'];
  }
}
