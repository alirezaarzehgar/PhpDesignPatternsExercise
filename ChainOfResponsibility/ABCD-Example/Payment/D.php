<?php 

namespace App\Payment;

class D extends AbstractHandler
{
    public function handler()
    {
        echo 'bemola ke ' . __CLASS__ . ' called' . PHP_EOL;

        parent::handler();
    }
}