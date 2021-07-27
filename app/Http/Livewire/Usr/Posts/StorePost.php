<?php

namespace App\Http\Livewire\Usr\Posts;

use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class StorePost extends Component
{

    public $p_catagory;
    public $p_title;
    public $p_image;
    public $p_des;

    public function savePost()
    {
        $post = new Post();

        $post->user_id = Auth::user()->id;
        $post->user_name = Auth::user()->name;
        $post->category_id = $this->p_catagory;
        $post->title = $this->p_title;
        $post->description = $this->p_des;
        $post->tag_id = 'first';
        $post->cover_pic = "p";
        $post->published_at = Carbon::now('+6:00');

        //dd($post);
        $post->save();

        session()->flash('success_message', 'Posted');
        return redirect()->route('home');
    }

    public function render()
    {
        $cat = Category::orderBy('created_at', 'ASC')->get();
        return view('livewire.usr.posts.store-post', ['cat' => $cat])->layout('layouts.base');
    }
}
