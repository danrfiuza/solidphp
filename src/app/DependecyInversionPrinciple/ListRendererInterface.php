<?php
/**
 * Created by PhpStorm.
 * User: fiuza
 * Date: 18/07/20
 * Time: 23:52
 */

namespace App\DependecyInversionPrinciple;


interface ListRendererInterface
{
    public function render();
    public function loadData(array $data): void;
}