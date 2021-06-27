<?php

namespace App\Payment;

abstract class AbstractHandler implements HandlerInterface
{
    private HandlerInterface $nextHandler;

    public function setNext(HandlerInterface $handler): HandlerInterface
    {
        $this->nextHandler = $handler;

        return $handler;
    }

    public function handler()
    {
        if (isset($this->nextHandler)) {
            $this->nextHandler->handler();
        }
    }
}