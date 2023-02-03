<?php

namespace App\Http\Controllers;

use App\Events\VideoViewer;
use App\Http\Requests\VideosRequest;
use Illuminate\Http\Request;
use App\Models\Videos;
use App\Models\ItemCourses;
use App\Traits\CategoryTrait;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class VideosController extends Controller
{   use CategoryTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($course_id)
    {   
        $course= ItemCourses::where('id',$course_id)->first();
       
        $user=Auth::user();
        if($user->type=='Professor'){
       
        return view('pages.professor.create_video',['user'=>$user,'course'=>$course]);
        }
        else{
            return view('errors.404');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(VideosRequest $request)
    {
        $user=Auth::user();
        if($user->type == 'Professor'){
            $file_name_video=$this->saveImage($request->video,'videos');
       
        $video=Videos::create([
            'name_en'=>$request->name_en,
            'name_ar'=>$request->name_ar,
            'course_id'=>$request->course_id,
            'video'=>$file_name_video,
           'description_en'=>$request->description_en,
           'description_ar'=>$request->description_ar,
        ]);
        return redirect()->back()->with(['success'=>__('messeges.video added successfully')]);
    }
        else{return redirect()->back()->with(['error'=>__('messeges.video could not be added')]);}
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { $user=Auth::user();
        $videos =Videos::where('course_id' , $id)->get();
        foreach($videos as $video) {
            $video =Videos::find($video->id);
        event(new VideoViewer($video));}
       
        
        return view('pages.videos' , ['allvideos' => $videos],['user'=>$user]);
    }

    public function getvideos($course_id){
        $course= ItemCourses::find($course_id);
        $videos=Videos::where('course_id',$course_id)->get();
        $user=Auth::user();
        return view('pages.professor.video' , ['videos' => $videos,'user'=>$user,'course'=>$course]);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($video_id)
    {
        $user=Auth::user();
        $videos= Videos::find($video_id);
       if(!$videos)
       return redirect()->back();
       $videos=Videos::select('id','name_en','name_ar'
       ,'description_en','description_ar','video','course_id')->find($video_id);
     
      return view('pages.professor.edit_video',['videos'=>$videos,'user'=>$user]);
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VideosRequest $request, $video_id)
    {
        $video= Videos::find($video_id);
        if(!$video)
        return redirect()->back();
         //update data
         $user=Auth::user();
        if($user->type == 'Professor'){
        $video->update($request->all());
        $file_name_video=$this->saveImage($request->video,'videos') ;
        
        $video->update(['video' => $file_name_video]); 
        return redirect()->back()->with(['success'=>__('messeges.video updated successfully')]);
        }
        else{
            return redirect()->back()->with(['error'=>__('messeges.video could not be updated')]);}
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($video_id)
    {
        $user = Auth::user();
        if($user->type =='Professor'){
        $video= Videos::find($video_id);
        if(!$video)
        return redirect()->back()->with(['error'=>__('messeges.video could not be deleted')]);
        $video->delete();
        return redirect()->back()->with(['success'=>__('messeges.video deleted successfully')]);
         }
    else{return redirect()->back()->with(['error'=>__('messeges.video could not be deleted')]);}
    
    }
}
