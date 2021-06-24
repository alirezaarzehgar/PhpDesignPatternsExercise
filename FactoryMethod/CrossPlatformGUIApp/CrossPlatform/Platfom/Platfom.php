<?php 

namespace App\CrossPlatform\Platfom;

abstract class Platfom implements PlatfomInterface
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