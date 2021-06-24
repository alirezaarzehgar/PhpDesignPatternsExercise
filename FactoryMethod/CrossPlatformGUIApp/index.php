<?php

use App\CrossPlatform\Button;
use App\CrossPlatform\Platfom\Web;

require __DIR__ . '/vendor/autoload.php';

$btn = Button::create(new Web());

$btn->renderWindow();