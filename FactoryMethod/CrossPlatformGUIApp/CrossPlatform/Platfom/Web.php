<?php

namespace App\CrossPlatform\Platfom;

use App\CrossPlatform\Platfom\Platfom;

class Web extends Platfom
{
    public function __construct() {
        $this->platform = $this::WEB;
    }
}