<?php 

namespace App\CrossPlatform;

use App\CrossPlatform\OS\OSInterface;

interface ButtonInterface
{
    static public function create(OSInterface $os);
}