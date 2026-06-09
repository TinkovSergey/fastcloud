<?php

namespace App\Livewire\Marketing;

use App\Livewire\Component;

class Contacts extends Component
{
    public function render()
    {
        return view('marketing.contacts', ['title' => 'Контакты']);
    }
}
