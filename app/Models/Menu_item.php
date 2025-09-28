<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;

class Menu_item extends Model
{
    public function menu(){
        return $this->belongsTo(Menu::class);
    }
}
