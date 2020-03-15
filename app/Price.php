<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable =['price'];

     public function coin()
     {
         return $this->belongsTo(Coin::class);
     }
}
