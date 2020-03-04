<?php

  class Cylindre extends Circle
  {
    private $h;

    public function __construct(float $x, float $y, $r, $h)
    {
      parent::__construct($x, $y, $r);

      $this->setHeight();
    }

    public function __toString()
    {
      $result = $this->perimetre() ."";

      return $result;
    }


    public function setHeight(float $height)
    {

      $this->h = $height;
    }

    public function getHeight()
    {

      return $this->h;
    }


    public function perimetre()
    {

      return parent::permietre() * $this->getHeight();
    }

  }

?>