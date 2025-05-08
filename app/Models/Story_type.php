<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story_type extends Model
{
    public function stories()
    {
        return $this->hasMany(Story::class, 'storyTypeId');
    }
}
