<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tashkel extends Model
{
    
    public function stories()
    {
        return $this->hasMany(Story::class, 'taskelId');
    }
}
