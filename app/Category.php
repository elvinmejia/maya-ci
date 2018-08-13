<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function service(){

        return $this->belongsTo(Service::class);//Pertenece a uno
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
}
