<?php

namespace App\Models;

use App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $guarded = ['id'];

    public function menu()
    {
        return $this->hasMany(Menu::class, 'category_id');
    }
}
