<?php

namespace App\InterfaceSegregationPrinciple;


interface WorkerInterface
{
    public function getPaid();

    public function takeBreak();
}