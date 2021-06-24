<?php 

namespace App\CrossPlatform\Platfom;

abstract class Platfom
{
    protected string $platform;

    const LINUX = 'linux';
    
    const WINDOWS = 'windows';
    
    const WEB = 'web';
    
    public function getName()
    {
        return $this->platform;
    }
}