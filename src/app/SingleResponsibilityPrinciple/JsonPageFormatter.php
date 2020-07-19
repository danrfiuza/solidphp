<?php

namespace App\SingleResponsibilityPrinciple;

use App\SingleResponsibilityPrinciple\Page;

class JsonPageFormatter
{
    public function format(Page $page)
    {
        return json_encode($page->getPage());
    }
}