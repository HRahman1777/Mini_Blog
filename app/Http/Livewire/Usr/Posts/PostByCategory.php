<?php

namespace App\Http\Livewire\Usr\Posts;

use Livewire\Component;

class PostByCategory extends Component
{
    public function render()
    {
        return view('livewire.usr.posts.post-by-category')->layout('layouts.base');
    }
}
