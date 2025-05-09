<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    public function province(){
        return $this->belongsTo(Province::class);
    }
    
    public function images(){
        return $this->hasMany(Image::class);
    }
}
