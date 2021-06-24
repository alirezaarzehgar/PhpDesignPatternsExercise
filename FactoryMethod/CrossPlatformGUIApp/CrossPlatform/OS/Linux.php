<?php

namespace App\CrossPlatform\OS;

class Linux extends OS
{
    public function __construct() {
        $this->os = $this::LINUX;
    }
}