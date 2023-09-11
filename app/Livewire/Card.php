<?php

namespace App\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $stars;
    public $text;
    public $name;
    public $role;
    public $image;

    public function render()
    {
        return view('livewire.card');
    }
}
