<?php

namespace App\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $card;

    public function render()
    {
        return view('livewire.card');
    }
}
