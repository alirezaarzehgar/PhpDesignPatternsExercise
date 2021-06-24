<?php 

namespace App\CrossPlatform;

class UnknowOS
{
    public function __get($name)
    {
        echo 'Unknow OS';
    }

    public function renderWindow()
    {
        echo 'Unknow OS';
    }
}