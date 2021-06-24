<?php 

namespace App\CrossPlatform;

use App\CrossPlatform\Platfom\Platfom;
use App\Factory\HtmlDialog;
use App\Factory\LinuxDialog;
use App\Factory\WindowsDialog;

class CPButton implements Button
{
    static public function create(Platfom $platform)
    {
        return match($platform->getName()) {
            Platfom::LINUX => new LinuxDialog(),

            Platfom::WINDOWS => new WindowsDialog(),

            Platfom::WEB => new HtmlDialog(),

            default => new UnknowOS(),
        };
    }
}