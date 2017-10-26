<?php

namespace Namespaces;

class TV extends Product
{
    private $resolution;
    private $diagonal;
    
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
        return $this;
    }

    public function getResolution()
    {
        return $this->resolution;
    }

    public function setDiagonal($diagonal)
    {
        $this->diagonal = $diagonal;
        return $this;
    }

    public function getDiagonal()
    {
        return $this->diagonal;
    }
}