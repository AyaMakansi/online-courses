<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'video_id',
        'video',
        'viewer',
    ];
    public function videos()
        {
            return $this->belongsTo('App\Models\Videos');
        }
}
