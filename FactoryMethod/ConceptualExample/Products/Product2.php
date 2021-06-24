<?php 

namespace App\Products;

class Product2 implements ProductInterface
{
    public function operate()
    {
        echo 'product2' . PHP_EOL;
    }
}