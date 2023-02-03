<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCourses extends Model
{
    use HasFactory;
    protected $table = "itemcourses";
    protected $fillable = [
        'name',
        'item_id',
       'image',
       'number',
       'time',
       
    ];

    
    public function item()
    {
        return $this->belongsTo('App\Models\CatItems');
    }
    public function video()
    {
        return $this->hasMany('App\Models\Videos');
    }

   

}
