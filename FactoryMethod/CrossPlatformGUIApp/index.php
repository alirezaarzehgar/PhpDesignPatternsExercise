<?php

use App\CrossPlatform\Button;
use App\CrossPlatform\Platfom\Linux;

require __DIR__ . '/vendor/autoload.php';

$btn = Button::create(new Linux());

$btn->renderWindow();