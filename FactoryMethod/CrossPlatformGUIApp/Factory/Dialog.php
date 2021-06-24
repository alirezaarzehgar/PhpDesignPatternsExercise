<?php 

namespace App\Factory;

use App\Button\ButtonInterface;

abstract class Dialog
{
    public function renderWindow()
    {
        $button = $this->createButton();
        $button->render();
    }

    abstract public function createButton(): ButtonInterface;
}
