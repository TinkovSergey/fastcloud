<?php

namespace App\Livewire\Marketing;

use App\Livewire\Component;

class Offer extends Component
{
    public function render()
    {
        return view('marketing.offer', ['title' => 'Договор-оферта']);
    }
}
