<?php 

namespace App\DialogFactory;

use App\Button\ButtonInterface;
use App\Button\LinuxButton;

class LinuxDialog extends Dialog {
    public function createButton(): ButtonInterface
    {
        return new LinuxButton();
    }
}