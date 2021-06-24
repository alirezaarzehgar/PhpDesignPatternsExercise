<?php 

namespace App\CrossPlatform;

use App\CrossPlatform\Platfom\Platfom;

interface ButtonInterface
{
    static public function create(Platfom $os);
}