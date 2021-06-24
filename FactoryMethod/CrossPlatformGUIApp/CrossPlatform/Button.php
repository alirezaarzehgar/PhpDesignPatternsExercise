<?php 

namespace App\CrossPlatform;

use App\CrossPlatform\OS\OS;
use App\CrossPlatform\OS\OSInterface;
use App\Factory\Dialog;
use App\Factory\HtmlDialog;
use App\Factory\LinuxDialog;
use App\Factory\WindowsDialog;

class Button implements ButtonInterface
{
    static public function create(OSInterface $os)
    {
        return match($os->getName()) {
            OS::LINUX => new LinuxDialog(),

            OS::WINDOWS => new WindowsDialog(),

            OS::WEB => new HtmlDialog(),

            default => new UnknowOS(),
        };
    }
}