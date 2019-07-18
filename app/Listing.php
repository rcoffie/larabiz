<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{

    protected $fillable = [
        'name', 'email', 'website','address','phone','bio',
    ];

   public function user(){

    return $this->hasMany('App\Listing');
   }
}
