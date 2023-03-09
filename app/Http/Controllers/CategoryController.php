<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Traits\CategoryTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    use CategoryTrait;
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getcategories(){
      // $categories =Category::all();
      // return view('pages.home',['allcategories'=>$categories]);
     $user = Auth::user();
     $categories= Category::select('id',
       'name_'.LaravelLocalization::getCurrentLocale().' as name',
       'image','icon')->get();
       return view('pages.home',['allcategories'=>$categories],['user'=>$user]);
    }
    public function search(Request $request)
    { $user = Auth::user();
      $request->validate([
        'q'=>'required'
      ]);
     
     $q=$request->q;
      $filteredCat=Category::where('name_en','like',$q . '%')->orWhere('name_ar','like',$q . '%')->get();
     
      if($filteredCat->count())
      {
        return view('pages.admin.allcat',[
            'allcategories' => $filteredCat
        ],['user'=>$user]);

      }else{
        
          return redirect('admin/allcategories')->with(['error'=>__('messeges.search failed please try again')]);
      }
       
    }

    public function getallcategories(){
        // $categories =Category::all();
        // return view('pages.home',['allcategories'=>$categories]);
        $user = Auth::user();
        if($user->type == 'Admin'){
       $categories= Category::select('id',
         'name_en','name_ar',
         'image','icon')->get();
         return view('pages.admin.allcat',['allcategories'=>$categories,'user'=>$user]);}
         else{return view('pages.home');} 
      }
    public function index()
    {   $user=Auth::user();
       
        return view('pages.admin.create_category',compact('user'));
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
    public function add(CategoryRequest $request)
    {
       $user = Auth::user();
              if($user->type == 'Admin'){
        $file_name_image=$this->saveImage($request->image,'images/categories');
        $file_name_icon=$this->saveImage($request->icon,'images/categories');
        Category::create([
            
            'name_en'=>$request->name_en,
            'name_ar'=>$request->name_ar,
            'image'=>$file_name_image,
            'icon'=>$file_name_icon,
         ]);
         return redirect()->back()->with(['success'=>__('messeges.category added successfully')]);
      
       }
       else{ return redirect()->back()->with(['error'=>__('messeges.category could not be added')]);}

    }
   
           
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category_id)
    {   $user=Auth::user();
        $category= Category::find($category_id);
       if(!$category)
       return redirect()->back();
       $category=Category::select('id','name_en','name_ar','image','icon')->find($category_id);
      return view('pages.admin.edit_category',['category'=>$category,'user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $category_id)
    { $category= Category::find($category_id);
        if(!$category)
        return redirect()->back();
         //update data
         $user=Auth::user();
        if($user->type == 'Admin'){
        $category->update($request->all());
        $file_name_image=$this->saveImage($request->image,'images/categories/') ;
        
        $file_name_icon=$this->saveImage($request->icon,'images/categories/') ;
        $category->update(['image' => $file_name_image]);   
        $category->update(['icon' => $file_name_icon]);  
        return redirect()->back()->with(['success'=>__('messeges.category updated successfully')]);
        }
        else{return redirect()->back()->with(['error'=>__('messeges.category could not be updated')]);}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($category_id)
    {   $user = Auth::user();
        if($user->type =='Admin'){
        $category= Category::find($category_id);
        if(!$category)
        return redirect()->back()->with(['error'=>__('messeges.category could not be deleted')]);
        $category->delete();
        return redirect()->back()->with(['success'=>__('messeges.category deleted successfully')]);
    }else{return redirect()->back()->with(['error'=>__('messeges.category could not be deleted')]);}
    }

    /*public function Remove(Request $request)
    {$removeableCatId = $request->id;
        $categorye = Category::where('id', $removeableCatId)->first();
        $categorye->delete();
        return redirect()->route('Home');
    }*/
}
