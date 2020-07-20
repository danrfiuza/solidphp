<?php

namespace App\LiskovSubistitutionPrinciple;


class Rectangle implements QuadrilateralInterface
{

    private $height;
    private $width;

    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function getArea(): float
    {
        return bcmul($this->width,$this->height,2);
    }
}