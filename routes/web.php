<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
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

Route::get('/', function () {
    return view('welcome');
});
  //Route::get('/','App\Http\Controllers\StudentController@index');
  //Route::get('/','App\Http\Controllers\StudentController@student');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route ::view("studentregister", 'studentregister');
//
Route::get('/welcome',function() {
     return view('welcome');
      });
Route::get('/home',function() {
    return view('home');
  });



 Route::get('/lecture',function() {
    return view('lecture');
  });

  // Route::get('/lecture',function() {
  //    return redirect()-> route('welcomne');
  //  });

  Route ::view("/lecture", 'lecture');

  Route::post('/lecture', function () {
         $article = new Article();
           $article->FName = request('FName');
           $article->Lname = request('Lname');
           $article->email = request('email');
           $article->phoneNo = request('phoneNo');
           $article->address = request('address');
           $article->city = request('city');
           $article->resume = request('resume');
           $article->LevelofStudy = request('LevelOfStudy');
           $article->tuitionCenter = request('tuitionCenter');
           $article->subject = request('subject');
           $article->day = request('day');
           $article->time = request('time');
           $article->save();

       });

//Route::post('lecture',[App\Http\Controllers\LectureController::class,'index'])->name('lecture');


Route::get('/about',function() {
   return view('about');

Route ::view("about", 'about');
});

Route ::view("/studentreg", 'studentreg');


Route::get('studentreg',[App\Http\Controllers\StudentController::class,'index']);
Route::post('/',[App\Http\Controllers\StudentController::class,'store'])->name('store');
Route::post('studentreg', [App\Http\Controllers\StudentController::class,'index'])->name('studentreg');
//Route::post('/',[App\Http\Controllers\StudentController::class,'index']);
