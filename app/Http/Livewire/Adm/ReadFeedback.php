<?php

namespace App\Http\Livewire\Adm;

use Livewire\Component;

class ReadFeedback extends Component
{
    public function render()
    {
        return view('livewire.adm.read-feedback')->layout('layouts.adminDeshboardBase');;
    }
}
