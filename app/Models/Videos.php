<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en',
        'name_ar',
        'course_id',
        'video',
        'viewer',
       'description_en',
       'description_ar',
    ];
    public function course()
    {
        return $this->belongsTo('App\Models\ItemCourses');
    }
}
