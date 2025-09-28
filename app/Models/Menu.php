<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Menu_item;

class Menu extends Model
{
    public function menuitems(){
        return $this->hasMany(Menu_item::class);
    }
}
