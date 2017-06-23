<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    // p48 L5 Essentials
    protected $fillable = ['name', 'date_of_birth', 'breed_id'];
    
    public function breed()
    {
        return $this->belongsTo('App\Breed');
    }
}