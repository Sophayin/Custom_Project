<?php

namespace App\Livewire\Component;

use Livewire\Component;

class Comp extends Component
{
    public function render()
    {
        return view('livewire.component.comp')->layout('layouts.app');
    }
}
