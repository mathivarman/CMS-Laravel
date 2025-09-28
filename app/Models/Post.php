<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\Category;
use App\Models\User;
use App\Models\Media_assect;

class Post extends Model
{
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function mediaasset(){
        return $this->belongsTo(Media_assect::class);
    }
}
