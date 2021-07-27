<?php

namespace App\Http\Livewire\Usr\Posts;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class SinglePost extends Component
{
    public $temp;
    public function mount($pid)
    {
        $this->temp = $pid;
    }

    public function render()
    {
        $s_post = Post::find($this->temp);
        $cat = Category::orderBy('created_at', 'ASC')->get();
        return view('livewire.usr.posts.single-post', ['post' => $s_post, 'cat' => $cat])->layout('layouts.base');
    }
}
