<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoursesRequest;
use Illuminate\Http\Request;
use App\Models\ItemCourses;
use App\Models\CatItems;
use App\Models\Professor;
use App\Models\Videos;
use App\Traits\CategoryTrait;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ItemCoursesController extends Controller
{
    use CategoryTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $user=Auth::user();
        $courses= ItemCourses::paginate(3);
        
        return view('pages.courses1',['allitemcourses'=>$courses],['user'=>$user]);
        
    }
    public function search(Request $request)
    {
        $user = Auth::user();
        $request->validate([
          'q'=>'required'
        ]);
       
       $q=$request->q;
        $filteredCourse=ItemCourses::where('name','like',$q . '%')->get();
       
        if($filteredCourse->count())
        {
          return view('pages.professor.allcourses',[
              'allcourses' => $filteredCourse
          ],['user'=>$user]);
  
        }else{
          
            return redirect('professor/allcourses')->with(['error'=>__('messeges.search failed please try again')]);
        }
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $user=Auth::user();
        if($user->type=='Professor'){
       $item=CatItems::all();
        return view('pages.professor.create_course',['user'=>$user,'item'=>$item]);
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
    public function add(CoursesRequest $request)
    {
        $user = Auth::user();
       
       if($user->type == 'Professor'){
        $file_name_image=$this->saveImage($request->image,'images/courses');
       
        ItemCourses::create([
            'name'=>$request->name,
            'image'=>$file_name_image,
            'item_id'=>$request->item_id,
            'number'=>$request->number,
            'time'=>$request->time,
         ]);
         return redirect()->back()->with(['success'=>__('messeges.course added successfully')]);
      
       }
       else{ return redirect()->back()->with(['error'=>__('messeges.course could not be added')]);}

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function getcoursesforitem($id)
    {
    }*/
    public function show($id)
    {
        $user=Auth::user();
        $courses = ItemCourses::with('item')->where('item_id' , $id)->get();
         
        return view('pages.courses' , ['allcourses' => $courses],['user'=>$user]);
    }
    public function getallcourses()
    {
        $user=Auth::user();
        $courses = ItemCourses::all();
        $item= CatItems::select('id',
       'name_'.LaravelLocalization::getCurrentLocale().' as name',
       'image','category_id')->first();
        
        return view('pages.professor.allcourses' , ['allcourses' => $courses,'user'=>$user,'item'=>$item]);
    }
  
    /*public function getprofessor()
     {
          
        $profssor = ItemCourses::all();
     
        return view('pages.About' , ['allprofessor' => $profssor]);
     }*/
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($course_id)
    {
        $user=Auth::user();
        $course= ItemCourses::find($course_id);
       if(!$course)
       return redirect()->back();
       $course=ItemCourses::select('id','name','item_id','image','number','time')->find($course_id);
       $items=CatItems::all();
      return view('pages.professor.edit_course',['course'=>$course,'user'=>$user,'items'=>$items]);
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CoursesRequest $request, $course_id)
    {
        $course= ItemCourses::find($course_id);
        if(!$course)
        return redirect()->back();
         //update data
         $user=Auth::user();
        if($user->type == 'Professor'){
        $course->update($request->all());
        $file_name_image=$this->saveImage($request->image,'images/courses/') ;
        
        $course->update(['image' => $file_name_image]);   
        
        return redirect()->back()->with(['success'=>__('messeges.course updated successfully')]);
        }
        else{return redirect()->back()->with(['error'=>__('messeges.course could not be updated')]);}
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($course_id)
    {
        $user = Auth::user();
        if($user->type =='Professor'){
        $course= ItemCourses::find($course_id);
        if(!$course)
        return redirect()->back()->with(['error'=>__('messeges.course could not be deleted')]);
        $course->delete();
        return redirect()->back()->with(['success'=>__('messeges.course deleted successfully')]);
    }else{return redirect()->back()->with(['error'=>__('messeges.course could not be deleted')]);}
    
    }
}
