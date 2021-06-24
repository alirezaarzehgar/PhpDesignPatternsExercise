<?php 

namespace App\Button;

class LinuxButton implements ButtonInterface
{
    public function render() {
        echo 'linux button';
    }

    public function onClick() {
        echo 'linux button clicked';
    }
}