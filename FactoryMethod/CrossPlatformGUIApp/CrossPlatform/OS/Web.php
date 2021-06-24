<?php

namespace App\CrossPlatform\OS;

class Web extends OS
{
    public function __construct() {
        $this->os = $this::WEB;
    }
}