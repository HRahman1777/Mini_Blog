<?php

use App\Http\Livewire\Adm\AllUser;
use App\Http\Livewire\Adm\CatagoryDetails;
use App\Http\Livewire\Adm\Dashboard;
use App\Http\Livewire\Adm\ReadFeedback;
use App\Http\Livewire\HomePage;
use App\Http\Livewire\Usr\Posts\AllPosts;
use App\Http\Livewire\Usr\Posts\PostByCategory;
use App\Http\Livewire\Usr\Posts\SinglePost;
use App\Http\Livewire\Usr\Posts\StorePost;
use App\Http\Livewire\Usr\Profile;
use Illuminate\Support\Facades\Route;


Route::get('/', HomePage::class)->name('home');
Route::get('usr/post/{pid}', SinglePost::class)->name('usr.spost');
Route::get('allposts', AllPosts::class)->name('all.posts');
Route::get('allposts/category', PostByCategory::class)->name('post.category');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('usr/addpost', StorePost::class)->name('usr.addPost');
    Route::get('usr/profile/{pro_id}', Profile::class)->name('usr.profile');

    Route::get('adm/dashboard', Dashboard::class)->name('adm.dashboard');
    Route::get('adm/categorydetails', CatagoryDetails::class)->name('adm.categorydetails');
    Route::get('adm/allusers', AllUser::class)->name('adm.allusers');
    Route::get('adm/feedback', ReadFeedback::class)->name('adm.feedback');


    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
