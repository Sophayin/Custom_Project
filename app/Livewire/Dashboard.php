<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $Hello; 
    public function render()
       {
        $this->Hello = "Hello World";
        return view('livewire.dashboard')->layout('layouts.app');
    }
}
