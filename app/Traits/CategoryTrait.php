<?php
namespace App\Traits;

use Illuminate\Support\Facades\File;

Trait CategoryTrait{
  function saveImage($photo,$folder){
   
    $file_extention = $photo->getClientOriginalExtension();
    $file_name=time().'.'.$file_extention;
    $path=$folder;
    $photo->move($path,$file_name);
    
    return $file_name;
  }
}
