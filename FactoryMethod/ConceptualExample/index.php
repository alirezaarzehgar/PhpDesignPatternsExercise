<?php

use App\ClientCode;
use App\ConcreateCreators\ConcreteCreator1;
use App\ConcreateCreators\ConcreteCreator2;

require __DIR__ . '/vendor/autoload.php';

$client = new ClientCode();

$client->operate(new ConcreteCreator1());
$client->operate(new ConcreteCreator2());