<?php 

namespace App\CrossPlatform;

use App\CrossPlatform\Platfom\Platfom;

interface Button
{
    static public function create(Platfom $os);
}