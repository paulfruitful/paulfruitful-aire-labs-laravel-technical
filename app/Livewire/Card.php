<?php

namespace App\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $stars=5;
    public function render()
    {
        return view('livewire.card');
    }
}
