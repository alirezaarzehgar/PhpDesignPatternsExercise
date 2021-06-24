<?php 

namespace App\CrossPlatform;

use App\CrossPlatform\Platfom\Platfom;
use App\CrossPlatform\Platfom\PlatfomInterface;
use App\Factory\Dialog;
use App\Factory\HtmlDialog;
use App\Factory\LinuxDialog;
use App\Factory\WindowsDialog;

class Button implements ButtonInterface
{
    static public function create(PlatfomInterface $platform)
    {
        return match($platform->getName()) {
            Platfom::LINUX => new LinuxDialog(),

            Platfom::WINDOWS => new WindowsDialog(),

            Platfom::WEB => new HtmlDialog(),

            default => new UnknowOS(),
        };
    }
}