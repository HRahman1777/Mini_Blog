<?php

namespace App\Http\Livewire\Adm;

use Livewire\Component;

class AllUser extends Component
{
    public function render()
    {
        return view('livewire.adm.all-user')->layout('layouts.adminDeshboardBase');;
    }
}
