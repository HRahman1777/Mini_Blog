<?php

namespace App\Http\Livewire\Usr;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public $temp;
    public function mount($pro_id)
    {
        $this->temp = $pro_id;
    }

    public function render()
    {
        $user = User::find($this->temp);
        $allpost = Post::where("user_id", "=", $this->temp)->get();
        return view('livewire.usr.profile', ['u' => $user, 'p' => $allpost])->layout('layouts.base');
    }
}
