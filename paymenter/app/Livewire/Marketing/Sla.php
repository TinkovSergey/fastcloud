<?php

namespace App\Livewire\Marketing;

use App\Livewire\Component;

class Sla extends Component
{
    public function render()
    {
        return view('marketing.sla', ['title' => 'SLA']);
    }
}
