<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $fillable = [
        'porcentage', 'name', 'price', 'content', '	avatar', 'valid_month', 'cellphone01', 'cellphone02', 'phone', 'email'
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($mail){
            Storage::disk('public')->delete($mail->avatar);//public => config/filesystems.php
        });
    }
}
