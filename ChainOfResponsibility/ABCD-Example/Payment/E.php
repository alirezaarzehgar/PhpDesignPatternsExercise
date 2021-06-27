<?php 

namespace App\Payment;

class E extends AbstractHandler
{
    public function handler()
    {
        echo 'bemola ke ' . __CLASS__ . ' called' . PHP_EOL;

        parent::handler();
    }
}