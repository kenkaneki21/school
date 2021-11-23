<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;

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


 Route::get('/wizard', function () {
	 
	 


    return view('admin.course.sample3');
});
 Route::get('/dynamic', function () {
     
     


    return view('admin.course.sample');
});

// Home Controller

Route::get('/',[HomeController::class,'index'])->name('dashboard');

//Entities Controller 

Route::get('/entity/register',[EntityController::class,'Register'])->name('entity.register');
Route::post('/entity/create',[EntityController::class,'RegisterEntity'])->name('register.entity');
Route::get('/entity/list',[EntityController::class,'Entitylist'])->name('entity.list');;
Route::get('/entity/edit/{id}',[EntityController::class,'EntityEdit']);
Route::post('/entity/update/{id}',[EntityController::class,'EntityUpdate']);
Route::get('/entity/delete/{id}',[EntityController::class,'EntityDelete']);

// Course Controller

Route::get('/course/list',[CourseController::class,'index'])->name('course.list');
Route::post('/entity/add',[CourseController::class,'AddCourse'])->name('add.course');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('logout',[EntityController::class,'Logout']);
