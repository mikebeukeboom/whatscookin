<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish_Ingredients extends Model
{
    protected $fillable = ['id_dish', 'id_ingredient'];
}
