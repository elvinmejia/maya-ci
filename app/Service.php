<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function getRouteKeyName()
    {
        return 'url';
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

}
