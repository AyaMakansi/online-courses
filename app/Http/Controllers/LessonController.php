<?php

namespace App\Http\Controllers;

use App\Events\VideoViewer;
use App\Models\Lesson;
use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function show($video_id)
    { $user=Auth::user();
        $videos=Videos::where('id', $video_id)->get();
       
        $lesson = Lesson::find($video_id);
        event(new VideoViewer($lesson));
        
    return view('pages.lesson',['lesson'=>$lesson,'videos'=>$videos,'video_id'=>$video_id],['user'=>$user]);
    }
}
