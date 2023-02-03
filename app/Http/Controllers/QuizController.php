<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizRequest;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\CatItems;
use App\Models\Question;
use App\Traits\CategoryTrait;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{  use CategoryTrait;
    public function index()
    {  $user=Auth::user();
        $Quizes= Quiz::paginate(6);
        return view('pages.Quiz',['allquizes'=>$Quizes],['user'=>$user]);
    }
    public function getquizzes()
    {$user=Auth::user();
        $Quizes= Quiz::all();
        return view('question1',['allquizzes'=>$Quizes],['user'=>$user]);
    }
    public function getallquizzes()
    {   $user=Auth::user();
        $allquizzes= Quiz::select('id',
       'name',
       'icon','item_id')->get();
      
        return view('pages.professor.allquizzes',['allquizzes'=>$allquizzes,'user'=>$user]);
    }
    public function search(Request $request)
    {
        $user = Auth::user();
        $request->validate([
          'q'=>'required'
        ]);
       
       $q=$request->q;
        $filteredQuiz=Quiz::where('name','like','%' . $q . '%')->get();
       
        if($filteredQuiz->count())
        {
          return view('pages.professor.allquizzes',[
              'allquizzes' => $filteredQuiz
          ],['user'=>$user]);
  
        }else{
          
            return redirect('professor/allquizzes')->with(['error'=>__('messeges.search failed please try again')]);
        }
    }
    public function create()
    {
        
        $user=Auth::user();
        if($user->type=='Professor'){
       $quiz=Quiz::all();
       $items=CatItems::all();
        return view('pages.professor.create_quiz',['user'=>$user,'quiz'=>$quiz,'items'=>$items]);
        }
        else{
            return view('errors.404');
        }
    }
    public function add(QuizRequest $request)
    {
        $user = Auth::user();
       
       if($user->type == 'Professor'){
        $file_name_icon=$this->saveImage($request->icon,'images/quizzes');
       
        Quiz::create([
            'name'=>$request->name,
            'icon'=>$file_name_icon,
            'item_id'=>$request->item_id,
           
         ]);
         return redirect()->back()->with(['success'=>__('messeges.quiz added successfully')]);
      
       }
       else{ return redirect()->back()->with(['error'=>__('messeges.quiz could not be added')]);}

    }
    public function edit($quiz_id)
    {
        $user=Auth::user();
        $quiz= Quiz::find($quiz_id);
       if(!$quiz)
       return redirect()->back();
       $quiz=Quiz::select('id','name','icon','item_id')->find($quiz_id);
       $items=CatItems::all();
      return view('pages.professor.edit_quiz',['quiz'=>$quiz,'user'=>$user,'items'=>$items]);
   
    }
    public function update(QuizRequest $request, $quiz_id)
    {
        $quiz= Quiz::find($quiz_id);
        if(!$quiz)
        return redirect()->back();
         //update data
         $user=Auth::user();
        if($user->type == 'Professor'){
        $quiz->update($request->all());
        $file_name_icon=$this->saveImage($request->icon,'images/quizzes/') ;
        
        $quiz->update(['icon' => $file_name_icon]);   
        
        return redirect()->back()->with(['success'=>__('messeges.quiz updated successfully')]);
        }
        else{return redirect()->back()->with(['error'=>__('messeges.quiz could not be updated')]);}
    
    }
    public function destroy($quiz_id)
    {
        $user = Auth::user();
        if($user->type =='Professor'){
        $quiz= Quiz::find($quiz_id);
        if(!$quiz)
        return redirect()->back()->with(['error'=>__('messeges.quiz could not be deleted')]);
        $quiz->delete();
        return redirect()->back()->with(['success'=>__('messeges.quiz deleted successfully')]);
    }else{return redirect()->back()->with(['error'=>__('messeges.quiz could not be deleted')]);}
    
    }

    
}
