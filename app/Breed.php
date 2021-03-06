<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    // pg49 L5 Essentials
    public $timestamps = false;
    
    protected $fillable = [ 'name'];
    
    public function cats()
    {
        return $this->hasMany('App\Cat');
    }
}