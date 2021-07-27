<?php

namespace App\Http\Livewire\Usr\Posts;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class AllPosts extends Component
{
    public function render()
    {
        $allpost = Post::orderBy('created_at', 'DESC')->get();
        $cat = Category::orderBy('created_at', 'DESC')->get();
        return view('livewire.usr.posts.all-posts', ['allpost' => $allpost, 'cat' => $cat])->layout('layouts.base');
    }
}
