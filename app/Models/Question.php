<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'a',
        'b',
        'c',
        'd',
        'ans',
     'quiz_id',
    ];
    public function quiz()
    {
        return $this->belongsTo('App\Models\Quiz');
    }
    
    
}
