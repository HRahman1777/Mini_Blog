<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class HomePage extends Component
{

    public function render()
    {
        $allpost = Post::orderBy('created_at', 'DESC')->get();
        $cat = Category::orderBy('created_at', 'DESC')->get();
        return view('livewire.home-page', ['allpost' => $allpost, 'cat' => $cat])->layout('layouts.base');
    }
}
