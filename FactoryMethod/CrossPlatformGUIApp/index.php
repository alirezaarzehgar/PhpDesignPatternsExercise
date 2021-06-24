<?php

use App\CrossPlatform\CPButton;
use App\CrossPlatform\Platfom\Linux;

require __DIR__ . '/vendor/autoload.php';

$btn = CPButton::create(new Linux());

$btn->renderWindow();