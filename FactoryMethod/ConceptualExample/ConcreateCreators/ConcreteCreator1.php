<?php 

namespace App\ConcreateCreators;

use App\Products\Product1;

class ConcreteCreator1 extends Creator
{
    public function factoryMethod()
    {
        return new Product1();
    }
}