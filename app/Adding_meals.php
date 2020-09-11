<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adding_meals extends Model
{
    protected $fillable = [
        'user_id', 'name', 'photo', 'price'
    ];
}
