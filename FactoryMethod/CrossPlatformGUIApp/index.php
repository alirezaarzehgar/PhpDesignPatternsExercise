<?php

use App\CrossPlatform\Button;
use App\CrossPlatform\OS;
use App\CrossPlatform\OS\Linux;
use App\CrossPlatform\OS\Web;
use App\CrossPlatform\OS\Windows;

require __DIR__ . '/vendor/autoload.php';

$btn = Button::create(new Web());

$btn->renderWindow();