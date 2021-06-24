<?php 

namespace App\CrossPlatform;

use App\CrossPlatform\Platfom\Platfom;
use App\CrossPlatform\Platfom\PlatfomInterface;

interface ButtonInterface
{
    static public function create(Platfom $os);
}