<?php

namespace App\Livewire\Accordion;

use Livewire\Component;

class AccordionList extends Component
{
    public function render()
    {
        return view('livewire.accordion.accordion-list')->layout('layouts.app');
    }
}
