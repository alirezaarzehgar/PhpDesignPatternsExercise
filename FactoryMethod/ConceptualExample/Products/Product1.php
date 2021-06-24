<?php 

namespace App\Products;

class Product1 implements ProductInterface
{
    public function operate()
    {
        echo 'product1' . PHP_EOL;
    }
}