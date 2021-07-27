<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    //protected $fillable = ['cover_image', 'title', ''];

    /*
    // for quick access to id and title of a post
    public function id(): int
    {
        return $this->id;
    }

    public function title(): int
    {
        return $this->title;
    }
    

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault('Admin User');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tag(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'post_tag');
    }
    */
}
