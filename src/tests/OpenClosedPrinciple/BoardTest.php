<?php
/**
 * Created by PhpStorm.
 * User: fiuza
 * Date: 18/07/20
 * Time: 00:48
 */

namespace Tests\App\OpenClosedPrinciple;


use App\OpenClosedPrinciple\Board;
use App\OpenClosedPrinciple\Circle;
use App\OpenClosedPrinciple\Rectangle;
use PHPUnit\Framework\TestCase;

class BoardTest extends TestCase
{
    public function testCalculateArea()
    {
        $mBoard = new Board();
        $mBoard->setShape((new Rectangle(3,2)));//6
        $mBoard->setShape((new Circle(3)));//

        $this->assertEquals(34.26,$mBoard->calculateArea(),'CalculateArea must be equal 34,26');
    }
}