<?php

use App\Payment\A;
use App\Payment\B;
use App\Payment\C;
use App\Payment\D;
use App\Payment\E;

require __DIR__ . '/vendor/autoload.php';

$a = new A;
$b = new B;
$c = new C;
$d = new D;
$e = new E;

$a->setNext($b)
    ->setNext($c)
    ->setNext($d)
    ->setNext($e);

$a->handler();