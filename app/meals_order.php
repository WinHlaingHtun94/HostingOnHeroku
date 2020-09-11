<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meals_order extends Model
{
    protected $fillable = [ 'user_id', 'user_name', 'email', 'address', 'contact', 'card_number', 'meals_id', 'meals_name', 'price' ];
}
