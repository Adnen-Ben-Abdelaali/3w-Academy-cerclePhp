<?php

  class Cercle
  {
    protected $x;
    protected $y;
    private $r;

    public function __construct(float $x, float $y, $r)
    {

      $this->setXorigin($x);
      $this->setYorigin($y);
      $this->setRadius($r);
    }

    public function __toString()
    {
      $result = $this->permietre() ."";

      return $result;
    }

    public function permietre()
    {

      return 2 * 3.14 * $this->getRadius();
    }
    
    public function setXorigin(float $origin)
    {
      
      $this->x = $origin;
    }

    public function setYorigin(float $origin)
    {

      $this->y = $origin;
    }

    public function setRadius( $radius)
    {

      $this->r = $radius;
    }

    public function getXorigin()
    {

      return $this->x;
    }

    public function getYorigin()
    {

      return $this->y;
    }

    public function getRadius()
    {

      try() {]
      return $this->r;
    }

  }

?>