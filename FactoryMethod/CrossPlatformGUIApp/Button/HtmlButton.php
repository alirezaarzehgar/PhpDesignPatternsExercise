<?php 

namespace App\Button;

class HtmlButton implements ButtonInterface
{
    public function render() {
        echo '<button>html button</button>';
    }

    public function onClick() {
        echo 'html button clicked!';
    }
}