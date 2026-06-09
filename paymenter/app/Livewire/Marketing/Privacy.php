<?php

namespace App\Livewire\Marketing;

use App\Livewire\Component;

class Privacy extends Component
{
    public function render()
    {
        return view('marketing.privacy', ['title' => 'Политика конфиденциальности']);
    }
}
