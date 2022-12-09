<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    public function categorys() {
        return $this->belongsToMany(Category::class);
    }
}

