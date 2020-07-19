<?php

namespace App\SingleResponsibilityPrinciple;

class Page
{
    protected $text;

    public function getPage()
    {
        return $this->text;
    }

    public function setPage($text)
    {
        $this->text = $text;
    }
}