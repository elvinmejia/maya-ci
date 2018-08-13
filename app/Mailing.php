<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailing extends Model
{
    protected $fillable = [
        'porcentage', 'name', 'text_before', 'price', 'content', '	avatar', 'valid_month', 'cellphone01', 'cellphone02', 'phone', 'email'
    ];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($mailing){
            Storage::disk('public')->delete($mailing->avatar);//public => config/filesystems.php
        });
    }
}
