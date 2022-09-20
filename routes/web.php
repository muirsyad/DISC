<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\question;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Question as ModelsQuestion;


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


Route::get('/land',[question::class, 'all']);

Route::get('/question',[question::class, 'qst']);
//question routing
Route::get('/home',[QuestionController::class,'index']);
//user routing
Route::get('/register',[UserController::class,'create']);
Route::get('/admin/register',[UserController::class,'adcreate']);
Route::POST('/users',[UserController::class,'store']);
Route::POST('/logout',[UserController::class,'logout']);
//login views
Route::get('/',[UserController::class,'login']);
//login with password and email
Route::POST('/users/auth',[UserController::class,'auth']);

//admin routes
Route::get('/ts',[UserController::class,'role']);
Route::get('/admin/index',[UserController::class,'dashboard']);
Route::get('/admin/createQ',[QuestionController::class,'createQ']);
Route::post('/question/store',[QuestionController::class,'storeQ']);
Route::get('/admin/question',[QuestionController::class,'showQ']);

//question routes
Route::get('/questions/quiz',[QuestionController::class,'test']);
Route::post('/questions/quiz/score',[QuestionController::class,'score']);

