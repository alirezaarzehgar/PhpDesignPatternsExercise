<?php 

namespace App\ConcreateCreators;

use App\Products\Product2;

class ConcreteCreator2 extends Creator
{
    public function factoryMethod()
    {
        return new Product2();
    }
}