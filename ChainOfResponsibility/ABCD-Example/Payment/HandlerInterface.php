<?php 

namespace App\Payment;

interface HandlerInterface
{
    public function handler();

    public function setNext(HandlerInterface $handler): HandlerInterface;
}