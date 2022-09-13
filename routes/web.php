<?php

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
Route::POST('/users',[UserController::class,'store']);
Route::POST('/logout',[UserController::class,'logout']);
//login views
Route::get('/',[UserController::class,'login']);
//login with password and email
Route::POST('/users/auth',[UserController::class,'auth']);

//admin routes
Route::get('/admin',[UserController::class,'adlog']);
