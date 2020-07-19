<?php

namespace App\OpenClosedPrinciple;


class Board
{

    /**
     * @var ShapeInterface[]
     */
    protected $shapes = [];

    /**
     * @param ShapeInterface $shape
     */
    public function setShape(ShapeInterface $shape): void
    {
        $this->shapes[] = $shape;
    }

    /**
     * @return float
     */
    public function calculateArea(): float
    {
        $area = 0.0;
        foreach($this->shapes as $shape) {
            $area = bcadd($area, $shape->area(),2);
        }
        return $area;
    }
}