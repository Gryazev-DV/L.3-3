<?php

namespace Namespaces;

class Pen extends Product implements ColorInterface
{
    private $collection;
    private $color;

    public function setCollection($collection)
    {
        $this->collection = $collection;
        return $this;
    }

    public function getCollection()
    {
        return $this->collection;
    }

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