<?php 

namespace App\Button;

class WindowsButton implements ButtonInterface
{
    public function render() {
        echo 'windows button';
    }

    public function onClick() {
        echo 'windows button clicked';
    }
}