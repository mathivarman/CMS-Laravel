<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Page;

class Media_assect extends Model
{
    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function pages(){
        return $this->hasMany(Page::class);
    }
}
