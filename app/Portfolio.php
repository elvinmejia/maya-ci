<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function category(){

        return $this->belongsTo(Category::class);//Pertenece a uno
    }

}
