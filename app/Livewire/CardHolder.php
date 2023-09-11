<?php

namespace App\Livewire;

use Livewire\Component;

class CardHolder extends Component
{
    public $data;
    public function render()
    {
        return view('livewire.card-holder');
    }
}
