<?php
/**
 * Created by PhpStorm.
 * User: fiuza
 * Date: 19/07/20
 * Time: 00:01
 */

namespace App\DependecyInversionPrinciple;


class Report
{
    /**
     * @var ListRendererInterface
     */
    private $renderer;

    public function __construct(ListRendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    public function loadData(array $data)
    {
        $this->renderer->loadData($data);
    }

    public function render()
    {
        $this->renderer->render();
    }
}