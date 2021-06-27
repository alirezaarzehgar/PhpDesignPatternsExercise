<?php 

namespace App\Payment;

use Exception;

class C extends AbstractHandler
{
    public function handler()
    {
        echo 'bemola ke ' . __CLASS__ . ' called' . PHP_EOL;

        return;

        parent::handler();
    }
}