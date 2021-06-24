<?php 

namespace App\Factory;

use App\Button\ButtonInterface;
use App\Button\WindowsButton;

class WindowsDialog extends Dialog {
    public function createButton(): ButtonInterface
    {
        return new WindowsButton();
    }
}