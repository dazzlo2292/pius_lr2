<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function banners() {
        return $this->belongsToMany(Banner::class);
    }
}
