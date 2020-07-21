<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    // The attributes that are mass assignable.
    protected $fillable = [
        'user_id', 'product_id', 'key',
    ];
}
