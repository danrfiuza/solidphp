<?php
/**
 * Created by PhpStorm.
 * User: fiuza
 * Date: 18/07/20
 * Time: 23:32
 */

namespace App\LiskovSubistitutionPrinciple;


interface QuadrilateralInterface
{
    public function setHeight(float $height) : void;
    public function setWidth(float $width) : void;
    public function getArea() : float;
}