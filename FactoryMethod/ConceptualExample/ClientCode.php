<?php 

namespace App;

use App\ConcreateCreators\Creator;

class ClientCode
{
    public function operate(Creator $creator)
    {
        $product = $creator->someOperation();
        $product->operate();
    }
}