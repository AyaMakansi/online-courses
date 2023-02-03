<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $table = "quizzes";
    protected $fillable = [
        'name',
        'icon',
       'item_id',
      
    ];
    public function item()
    {
        return $this->belongsTo('App\Models\CatItems');
    }

    
    public function question()
    {
        return $this->hasMany('App\Models\Question');
    }
}
