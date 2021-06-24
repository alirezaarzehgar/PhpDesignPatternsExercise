<?php 

namespace App\CrossPlatform;

use App\CrossPlatform\Platfom\Platfom;
use App\DialogFactory\HtmlDialog;
use App\DialogFactory\LinuxDialog;
use App\DialogFactory\WindowsDialog;

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