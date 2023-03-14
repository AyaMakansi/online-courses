<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\CatItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Traits\CategoryTrait;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class usercontroller extends Controller
{use CategoryTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    { $user = Auth::user();
      $request->validate([
        'q'=>'required'
      ]);
     
     $q=$request->q;
      $filteredUsers=User::where('first_name','like','%' . $q . '%')
      ->orWhere('email','like','%' . $q . '%')->get();
     
      if($filteredUsers->count())
      {
        return view('pages.admin.allusers',[
            'allusers' => $filteredUsers
        ],['user'=>$user]);

      }else{
        
          return redirect('admin/allusers')->with(['error'=>__('messeges.search failed please try again')]);
      }
       
    }

    public function dashboard($user_id)
    {
        $user = Auth::user();
        if($user->type == 'Admin'){
            return view('pages.admin.dashboard',compact('user'));
        }
        else if($user->type == 'Professor')
        {return view('pages.professor.dashboard',compact('user'));}
        else{return view('pages.student.dashboard',compact('user'));}
    }
    /*public function getsetting()
    {  $user=Auth::user();
       
        return view('pages.admin.setting',compact('user'));
    }*/
    public function getallusers(){
        // $categories =Category::all();
        // return view('pages.home',['allcategories'=>$categories]);
        $user = Auth::user();
        if($user->type == 'Admin'){
       $users= User::select('id','image',
         'first_name','last_name','type','email','created_at')
         ->where("id","!=",$user->id)->get();
       
        return view('pages.admin.allusers',['allusers'=>$users],['user'=>$user]);}
         else{return view('pages.home');} 
      }
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validation=$request->validate([
            'first_name' => 'required|min:2|max:255',
            'last_name' =>'required|min:2|max:255',
            'type'=>'required',
            'email' => 'required|unique:users|max:255',
            'password' => 'required',
        ]);
        
        $user = new User;

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->password = Hash::make($request->password);
        $user->save();
         
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {  
        $user= User::find($user_id);
       if(!$user)
       return redirect()->back();
       $user=User::select('id','image','first_name','last_name','type','email')->find($user_id);
      return view('pages.admin.edit_user',compact('user'));
    }
    public function settingedit()
    {  
         $user=Auth::user();
         if($user->type == 'Admin'){
      return view('pages.admin.setting',compact('user'));
         }
         else if($user->type == 'Professor'){
            return view('pages.professor.setting',compact('user'));
         }
         else{return view('pages.student.setting',compact('user'));}
    }
    public function settingupdate(Request $request, $user_id)
    {
        $users= User::find($user_id);
        if(!$users)
        return redirect()->back();
         //update data
         $user=Auth::user();
        
        $users->update($request->all());
        //$file_name_image=$this->saveImage($request->image,'images/users/') ;
        
        //$users->update(['image' => $file_name_image]);   
         
        return redirect()->back()->with(['success'=>__('messeges.user updated successfully')]);
        
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        $users= User::find($user_id);
        if(!$users)
        return redirect()->back();
         //update data
         $user=Auth::user();
        if($user->type == 'Admin'){
          
        $users->update($request->all());
        $file_name_image=$this->saveImage($request->image,'images/users/') ;
        
        $users->update(['image' => $file_name_image]);   
         
        return redirect()->back()->with(['success'=>__('messeges.user updated successfully')]);
        }
        else{return redirect()->back()->with(['error'=>__('messeges.user could not be updated')]);}
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        $user = Auth::user();
        if($user->type =='Admin'){
        $users= User::find($user_id);
        if(!$users)
        return redirect()->back()->with(['error'=>__('messeges.user could not be deleted')]);
        $users->delete();
        return redirect()->back()->with(['success'=>__('messeges.user deleted successfully')]);
    }else{return redirect()->back()->with(['error'=>__('messeges.user could not be deleted')]);}
    }
    public function changePassword(Request $request)
    {   $user=Auth::user();
        if($user->type == 'Admin'){
            return view('pages.admin.setting');
        }
        else if ($user->type == 'Professor'){
            return view('pages.professor.setting');
        }
        else{return view('pages.student.setting');}
        
    }
    public function changePasswordSave(Request $request)
    {
        
        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:8|string'
        ]);
        $auth = Auth::user();
 
 // The passwords matches
        if (!Hash::check($request->get('current_password'), $auth->password)) 
        {
            return back()->with(['error'=>__('messeges.current password is invalid')]);
        }
 
// Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0) 
        {
            return redirect()->back()->with(['error'=>__('messeges.New Password cannot be same as your current password')]);
        }
 
        $user =  User::find($auth->id);
        $user->password =  Hash::make($request->new_password);
        $user->save();
        return back()->with(['success'=>__('messeges.password changed successfully')]);
    }
    public function login1(){
        return view('pages.login1');
    }
    
  
}
