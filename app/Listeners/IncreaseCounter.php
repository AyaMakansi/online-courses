<?php

namespace App\Listeners;

use App\Events\VideoViewer;
use App\Models\Lesson;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;

class IncreaseCounter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(VideoViewer $event)
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    
    public function handle(VideoViewer $event)
    { 
         if(!session()->has('videoinvisited'))
       $this->updateViewer($event->lesson);
        else{return false;}
    }
    function updateViewer($lesson)
    { $user=Auth::user();
      $lesson->viewer=$lesson->viewer + 1;
       $lesson->save();
       session()->put('videoinvisited',$lesson->id);
    }
}
