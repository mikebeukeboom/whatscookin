<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['name'];
    public function getIngredients()
    {
        return $this->all();
    }
}
