<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $fillable =['name'];

    public function price()
    {
        return $this->hasMany(Price::class);
    }

    public function getNameAttribute($value)
    {
        return strtoupper($value);

    }
}

