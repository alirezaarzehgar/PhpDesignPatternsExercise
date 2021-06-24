<?php 

namespace App\CrossPlatform\OS;

abstract class OS implements OSInterface
{
    protected string $os;

    const LINUX = 'linux';
    
    const WINDOWS = 'windows';
    
    const WEB = 'web';
    
    public function getName()
    {
        return $this->os;
    }
}