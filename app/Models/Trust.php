<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trust extends Model
{
    use HasFactory;
    public $table='story_details';

    protected $fillable = [
   
        'job_title',
        'form_type',
        'trust_type',
        'summary',
        'user_id',
    ];

    // علاقة مع المستخدم
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
