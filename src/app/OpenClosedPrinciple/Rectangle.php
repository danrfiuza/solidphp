<?php

namespace App\OpenClosedPrinciple;

use App\OpenClosedPrinciple\ShapeInterface;

class Rectangle implements ShapeInterface
{
    protected $width;
    protected $height;

    public function __construct($width,$height)
    {
        $this->width  = $width;
        $this->height = $height;
    }

    public function area(): float
    {
        return bcmul($this->width, $this->height,2);
    }

    public function setWidth($width): void
    {
        $this->width = $width;
    }

    public function setHeight($height): void
    {
        $this->height = $height;
    }
}