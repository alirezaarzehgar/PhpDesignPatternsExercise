<?php 

namespace App\CrossPlatform\Platfom;

use App\CrossPlatform\Platfom\Platfom;

class Windows extends Platfom
{
    public function __construct() {
        $this->platform = $this::WINDOWS;
    }
}