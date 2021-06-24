<?php 

namespace App\DialogFactory;

use App\Button\ButtonInterface;
use App\Button\HtmlButton;

class HtmlDialog extends Dialog
{
    public function createButton(): ButtonInterface {
        return new HtmlButton();
    }
}