<?php

namespace App\Livewire\Marketing;

use App\Livewire\Component;

class Locations extends Component
{
    public function render()
    {
        return view('marketing.locations', ['title' => 'Локации']);
    }
}
