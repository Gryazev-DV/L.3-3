<?php

namespace Namespaces;

class Car extends Product implements ColorInterface
{
    private $color;

    public function setColor($color)
    {
      $this->color = $color;
      return $this;
    }

    public function getColor()
    {
        return $this->color;
    }
	
}