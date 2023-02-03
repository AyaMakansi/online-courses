<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Option;
use Illuminate\Support\Facades\Session;
use DB;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    
    public function index()
    {
       $Questions = Question::all();
    
       return view('question1' , ['allquestions' => $Questions]);
    }
    public function create($quiz_id)
    {   $quiz= Quiz::find($quiz_id);
       
        $user=Auth::user();
        if($user->type=='Professor'){
       
        return view('pages.professor.create_question',['user'=>$user,'quiz'=>$quiz]);
        }
        else{
            return view('errors.404');
        }
        
    }
    
    
   public function add(QuestionRequest $request,$quiz_id)
   {   $quiz=Quiz::find($quiz_id); 
       $user=Auth::user();
      if($user->type == 'Professor'){
       
    $question=Question::create([
        'question'=>$request->question,
        'a'=>$request->a,
        'b'=>$request->b,
        'c'=>$request->c,
        'd'=>$request->d,
        'ans'=>$request->ans,
       'quiz_id'=>$quiz->id,
    ]);
    return redirect()->back()->with(['success'=>__('messeges.question added successfully')]);}
    else{return redirect()->back()->with(['error'=>__('messeges.question could not be added')]);}
}
   public function startquiz($id){
    $user=Auth::user();
    Session::put('nextq','1');
    Session::put('wrongans','0');
    Session::put('correctans','0');
    
    $allquestion = Question::select('id',
    'question','a','b','c','d','ans')->with('Quiz')->where('quiz_id' , $id)->first();
        
    return view('pages.Question', ['questions' => $allquestion,'quiz_id'=>$id],['user'=>$user]);
}
   public function show($quiz_id){
    $quiz= Quiz::select('id','name','icon')->find($quiz_id);
    $questions=$quiz->question;
    
    $user=Auth::user();
    return view('pages.professor.questions' , ['questions' => $questions,'user'=>$user,'quiz'=>$quiz]);
     }
    
    public function submitans(Request $request,$id){
       $user=Auth::user();
        $nextq=Session::get('nextq');
        $wrongans=Session::get('wrongans');
        $correctans=Session::get('correctans');
        $validate=$request->validate([
            'ans'=>'required',
            'dbans'=>'required',
        ]);
        
        $nextq+=1;
        if($request->dbans==$request->ans)
        {
            $correctans+=1;
        }
        else{
            $wrongans+=1;
        }
        Session::put('nextq',$nextq);
        Session::put('wrongans',$wrongans);
        Session::put('correctans',$correctans);

        $i=0;
        $questions=Question::with('Quiz')->where('quiz_id',$id)->get();
        foreach($questions as $question){
            $i++;
            if($questions->count() < $nextq){
                return view('pages.end',['user'=>$user]);

            }
            if($i==$nextq)
            {
                return view('pages.Question')->with(['questions'=>$question,'quiz_id'=>$id],['user'=>$user]);
            }
        }
    }

    public function edit($question_id)
    {  
        $user=Auth::user();
        $question= Question::find($question_id);
       if(!$question)
       return redirect()->back();
       $question=Question::select('id','question','a','b','c','d','ans','quiz_id')->find($question_id);
     
      return view('pages.professor.edit_question',['question'=>$question,'user'=>$user]);
   
    }
    public function update(QuestionRequest $request, $question_id)
    {      
        $question= Question::find($question_id);
        if(!$question)
        return redirect()->back();
         //update data
         $user=Auth::user();
        if($user->type == 'Professor'){
        $question->update($request->all());
        return redirect()->back()->with(['success'=>__('messeges.question updated successfully')]);
        }
        else{
            return redirect()->back()->with(['error'=>__('messeges.question could not be updated')]);}
    
    }
    public function destroy($question_id)
    {   
        $user = Auth::user();
        if($user->type =='Professor'){
        $question= Question::find($question_id);
        if(!$question)
        return redirect()->back()->with(['error'=>__('messeges.question could not be deleted')]);
        $question->delete();
        return redirect()->back()->with(['success'=>__('messeges.question deleted successfully')]);
         }
    else{return redirect()->back()->with(['error'=>__('messeges.question could not be deleted')]);}
    
    }
    /*public function index()
    {
        $Questions= Question::paginate(6);
        return view('pages.Question',['allquestions'=>$Questions]);
    }*/
    
}
