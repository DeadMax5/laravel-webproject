<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = ['storyTypeId', 'taskelId', 'summry', 'job_title'];
    public function storyType()
    {
        return $this->belongsTo(Story_type::class, 'storyTypeId');
    }

    public function taskel()
    {
        return $this->belongsTo(Tashkel::class, 'taskelId');
    }
}
