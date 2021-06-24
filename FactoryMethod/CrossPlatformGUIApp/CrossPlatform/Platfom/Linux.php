<?php

namespace App\CrossPlatform\Platfom;

class Linux extends Platfom
{
    public function __construct() {
        $this->platform = $this::LINUX;
    }
}