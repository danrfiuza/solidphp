<?php

namespace App\OpenClosedPrinciple;

use App\OpenClosedPrinciple\ShapeInterface;

class Circle implements ShapeInterface
{

    /**
     * @var float
     */
    protected $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area(): float
    {
        return bcmul($this->radius, bcmul($this->radius, pi(),2),2);
    }

    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }
}