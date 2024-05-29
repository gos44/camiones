<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class truck_driver extends Model
{
    use HasFactory;
   
  
    public function truck_driver(){
        return $this->hasMany('App\Models\package');
    }

    public function truck_drivera(){
        return $this->belongsToMany('App\Models\truck');
    }
}
