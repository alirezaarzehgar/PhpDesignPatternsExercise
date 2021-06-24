<?php 

namespace App\ConcreateCreators;

use App\Products\ProductInterface;

abstract class Creator
{
    abstract public function factoryMethod();

    public function someOperation(): ProductInterface
    {
        $result = $this->factoryMethod();

        return $result;
    }
}