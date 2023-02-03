<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatItems extends Model
{
    use HasFactory;
    protected $table = "catitems";
    protected $fillable = [
        'name_en',
        'name_ar',
        'category_id',
       'image',
      
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function course()
    {
        return $this->hasMany('App\Models\ItemCourses');
    }
    public function quizes()
    {
        return $this->hasMany('App\Models\Quiz');
    }
}
