<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemsRequest;
use Illuminate\Http\Request;
use App\Models\CatItems;
use App\Models\Category;
use App\Traits\CategoryTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CatItemsController extends Controller
{
    use CategoryTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $user=Auth::user();
       $catitems= CatItems::select('id',
       'name_'.LaravelLocalization::getCurrentLocale().' as name',
       'image','category_id')->paginate(6);
        return view('pages.properties1',['allcatitems'=>$catitems],['user'=>$user]);
    }
 public function getitemsforcategory($id)
    {$user=Auth::user();
       $items = CatItems::select('id',
       'name_'.LaravelLocalization::getCurrentLocale().' as name',
       'image','category_id')->with('category')->where('category_id' , $id)->get();
     
       return view('pages.Properties' , ['allitems' => $items],['user'=>$user]);
    }
    public function getallitems()
    {   $user=Auth::user();
        $items= CatItems::select('id',
       'name_en','name_ar',
       'image','category_id')->get();
      
        return view('pages.admin.allitems',['allitems'=>$items,'user'=>$user]);
    }
    public function search(Request $request){
        $user = Auth::user();
      $request->validate([
        'q'=>'required'
      ]);
     
     $q=$request->q;
      $filteredItem=CatItems::where('name_en','like',$q . '%')->orWhere('name_ar','like',$q . '%')->get();
     
      if($filteredItem->count())
      {
        return view('pages.admin.allitems',[
            'allitems' => $filteredItem
        ],['user'=>$user]);

      }else{
        
          return redirect('admin/allitems')->with(['error'=>__('messeges.search failed please try again')]);
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
       $category=Category::all();
        return view('pages.admin.create_item',['user'=>$user,'category'=>$category]);
     
    }

   
 

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
    public function add(ItemsRequest $request)
    {
        $user = Auth::user();
       
       if($user->type == 'Admin'){
        $file_name_image=$this->saveImage($request->image,'images/items');
       
        CatItems::create([
            'name_en'=>$request->name_en,
            'name_ar'=>$request->name_ar,
            'category_id'=>$request->category_id,
            'image'=>$file_name_image,
         ]);
         return redirect()->back()->with(['success'=>__('messeges.item added successfully')]);
      
       }
       else{ return redirect()->back()->with(['error'=>__('messeges.item could not be added')]);}

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
    public function edit($item_id)
    {    $user=Auth::user();
        $item= CatItems::find($item_id);
       if(!$item)
       return redirect()->back();
       $item=CatItems::select('id','name_en','name_ar','category_id','image')->find($item_id);
       $category=Category::all();
      return view('pages.admin.edit_item',['item'=>$item,'user'=>$user,'category'=>$category]);
   
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ItemsRequest $request, $item_id)
    {
        $item= CatItems::find($item_id);
        if(!$item)
        return redirect()->back();
         //update data
         $user=Auth::user();
        if($user->type == 'Admin'){
        $item->update($request->all());
        $file_name_image=$this->saveImage($request->image,'images/items/') ;
        
        $item->update(['image' => $file_name_image]);   
        
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
    public function destroy($item_id)
    {
        $user = Auth::user();
        if($user->type =='Admin'){
        $item= CatItems::find($item_id);
        if(!$item)
        return redirect()->back()->with(['error'=>__('messeges.item could not be deleted')]);
        $item->delete();
        return redirect()->back()->with(['success'=>__('messeges.item deleted successfully')]);
    }else{return redirect()->back()->with(['error'=>__('messeges.item could not be deleted')]);}
    
    }
}
