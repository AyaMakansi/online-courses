<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CatItemsController;
use App\Http\Controllers\ItemCoursesController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\OptionController;
use App\Models\CatItems;
use App\Models\ItemCourses;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





/*Route::get('/about', function () {
    return view('pages.About');
})->name('About');*/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 




Auth::routes();
/*Route::get('/home',[HomeController::class,'index']);*/
Route::group(['middleware'=>['auth:sanctum'],],function(){
   
    Route::get('/contact', [ContactController::class, 'index'])->name('Contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('store');
    /*Route::post('/sendemail', [ContactController::class, 'sendEmail'])->name('sendEmail');*/
    
    Route::get('/home',[CategoryController::class,'getcategories'])->name('Home');
    
    Route::get('/',[LoginController::class,'login']);
    Route::get('/Quizes',[QuizController::class,'index'])->name('Quizes');
    /*Route::get('/Questions/{id}',[QuestionController::class,'index'])->name('getquestions');*/
    
    
    Route::get('/getallcat',[CategoryController::class,'getcategories'])->name('getall');
    /*Route::get('/cat-items', [CategoryController::class, 'index']);*/
    
    Route::get('/items/{id}', [CatItemsController::class, 'getitemsforcategory'])->name('getitems');
    Route::get('/allitems', [CatItemsController::class, 'index'])->name('allitems');
    
    Route::get('/courses/{id}', [ItemCoursesController::class, 'show'])->name('getcourses');
    Route::get('/allcourses', [ItemCoursesController::class, 'index'])->name('allcourses');
    
    Route::get('/Lessons/{id}', [VideosController::class, 'show'])->name('getlessons');
    Route::get('/videos/{id}', [LessonController::class, 'show'])->name('getvideos');
   
    Route::group(['prefix'=>'admin/categories'],function(){
        Route::post('add', [CategoryController::class, 'add'])->name('categories.add');
        Route::get('edit/{category_id}',[CategoryController::class,'edit'])->name('categories.edit');
        Route::post('update/{category_id}',[CategoryController::class,'update'])->name('categories.update');
        Route::get('delete/{category_id}',[CategoryController::class,'destroy'])->name('categories.delete');
        Route::get('allcategories',[CategoryController::class,'getallcategories'])->name('categories.all');
        Route::get('create',[CategoryController::class,'index'])->name('categories.create');
       });
       Route::get('/change-password', [UserController::class, 'changePassword'])->name('changePassword');
       Route::post('/change-password', [UserController::class, 'changePasswordSave'])->name('postChangePassword');
       Route::group(['prefix'=>'admin/items'],function(){
        Route::get('create',[CatItemsController::class,'create'])->name('item.create');
        Route::post('add', [CatItemsController::class, 'add'])->name('item.add');
        Route::get('edit/{item_id}',[CatItemsController::class,'edit'])->name('item.edit');
        Route::post('update/{item_id}',[CatItemsController::class,'update'])->name('item.update');
        Route::get('delete/{item_id}',[CatItemsController::class,'destroy'])->name('item.delete');
       });
    Route::get('dashboard/{user_id}',[usercontroller::class,'dashboard'])->name('dashboard');
    Route::get('admin/allcategories',[CategoryController::class,'getallcategories'])->name('admin.all');
    Route::get('admin/allusers',[userController::class,'getallusers'])->name('admin.allusers');
    Route::post('/search', [usercontroller::class, 'search'])->name('search');
    Route::post('/search_cat', [CategoryController::class, 'search'])->name('search_category');
    Route::post('/search_item', [CatItemsController::class, 'search'])->name('search_item');
    Route::post('/search_course', [ItemCoursesController::class, 'search'])->name('search_course');
    Route::post('/search_quiz', [QuizController::class, 'search'])->name('search_quiz');
   
    Route::get('admin/allitems',[CatItemsController::class,'getallitems'])->name('admin.allitems');
   
    Route::get('setting',[usercontroller::class,'settingedit'])->name('setting');
    Route::post('setting/{user_id}',[usercontroller::class,'settingupdate'])->name('setting.update');
    Route::group(['prefix'=>'admin/users'],function(){
         Route::get('edit/{user_id}',[usercontroller::class,'edit'])->name('user.edit');
        Route::post('update/{user_id}',[usercontroller::class,'update'])->name('user.update');
        Route::get('delete/{user_id}',[usercontroller::class,'destroy'])->name('user.deleted');
    });
    
    Route::group(['prefix'=>'professor'],function(){
    Route::get('allcourses',[ItemCoursesController::class,'getallcourses'])->name('professor.allcourses');
    Route::get('allquizzes',[QuizController::class,'getallquizzes'])->name('professor.allquizzes');
   
    Route::group(['prefix'=>'course'],function(){
        Route::get('create',[ItemCoursesController::class,'create'])->name('course.create');
        Route::post('add', [ItemCoursesController::class, 'add'])->name('course.add');
         Route::get('edit/{course_id}',[ItemCoursesController::class,'edit'])->name('course.edit');
        Route::post('update/{course_id}',[ItemCoursesController::class,'update'])->name('course.update');
        Route::get('delete/{course_id}',[ItemCoursesController::class,'destroy'])->name('course.deleted');
    });
    Route::group(['prefix'=>'quiz'],function(){
        Route::get('create',[QuizController::class,'create'])->name('quiz.create');
        Route::post('add', [QuizController::class, 'add'])->name('quiz.add');
         Route::get('edit/{quiz_id}',[QuizController::class,'edit'])->name('quiz.edit');
        Route::post('update/{quiz_id}',[QuizController::class,'update'])->name('quiz.update');
        Route::get('delete/{quiz_id}',[QuizController::class,'destroy'])->name('quiz.deleted');
    });
        Route::group(['prefix'=>'quiz/{quiz_id}/'],function(){
        Route::get('/',[QuestionController::class,'show'])->name('question.show');
        Route::get('create',[QuestionController::class,'create'])->name('question.create');
        Route::post('add', [QuestionController::class, 'add'])->name('question.add');
        });
        Route::group(['prefix'=>'quiz/question/'],function(){
       
        Route::get('edit/{question_id}',[QuestionController::class,'edit'])->name('question.edit');
        Route::post('update/{question_id}',[QuestionController::class,'update'])->name('question.update');
        Route::get('delete/{question_id}',[QuestionController::class,'destroy'])->name('question.deleted');
        });  
        Route::group(['prefix'=>'course/{course_id}/'],function(){
            Route::get('/',[VideosController::class,'getvideos'])->name('video.show');
            Route::get('create',[VideosController::class,'create'])->name('video.create');
            Route::post('add', [VideosController::class, 'add'])->name('video.add');
            });
           
            Route::get('edit/{video_id}',[VideosController::class,'edit'])->name('video.edit');
            Route::post('update/{video_id}',[VideosController::class,'update'])->name('video.update');
            Route::get('delete/{video_id}',[VideosController::class,'destroy'])->name('video.deleted');
                   
    });
    
});

      
  /*  Route::get('/home', [CategoryController::class, 'index'])->name('home');
    Route::get('admin/home', [ProfessorController::class, 'getprofessors'])->name('admin.home');
   */
   

   /* Route::post('/Addprofessor', [ProfessorController::class, 'store'])->name('Add professor');
    Route::delete('/removeCategory/{id}', [CategoryController::class, 'destroy'])->name('RemoveCategory');
    Route::delete('/removeProfessor/{id}', [ProfessorController::class, 'destroy'])->name('RemoveProfessor');
*/
Route::get('/about',[ContactController::class,'getabout'])->name('About');
Route::get('/coursesforprofessor/{id}', [ItemCoursesController::class, 'getcoursesforprofessor'])->name('getcoursesforprofessor');


//Route::any('submitans','QuestionController@submitans');
Route::any('submitans/{id}',[QuestionController::class,'submitans'])->name('submitans');

Route::any('/startquiz/{id}', [QuestionController::class, 'startquiz'])->name('getquestions');


Route::any('end',function(){
    return view ('pages.end');
});
Route::any('ans',function(){
    return view ('pages.answer');
});
/*Route::get('/questions', [QuizController::class, 'getquizzes'])->name('getquizzes');*/
Route::post('/Addquestion', [QuestionController::class, 'add'])->name('Add Question');
Route::get('/questions', [QuestionController::class, 'index']);

});
