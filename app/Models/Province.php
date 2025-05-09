<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    function localities(){
        return $this->hasMany('App\Models\Locality');
    }
}
