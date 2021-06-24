<?php 

namespace App\Button;

interface ButtonInterface
{
    public function render();

    public function onClick();
}