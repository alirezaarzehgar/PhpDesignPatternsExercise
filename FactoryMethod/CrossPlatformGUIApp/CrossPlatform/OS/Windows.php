<?php 

namespace App\CrossPlatform\OS;

class Windows extends OS
{
    public function __construct() {
        $this->os = $this::WINDOWS;
    }
}