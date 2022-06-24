<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\Studentcontroller;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MarkController;

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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function ()
{
    Route::get('/dashboard',[DashBoardController::class,'index'])->name('dashboard');

    //student controller
    Route::get('add-student',[Studentcontroller::class,'index'])->name('add.student');
    Route::post('new-student',[Studentcontroller::class,'create'])->name('new.student');
    Route::get('manage-student',[Studentcontroller::class,'manage'])->name('manage.student');
    Route::get('edit-student/{id}',[Studentcontroller::class,'edit'])->name('edit.student');
    Route::post('update-student/{id}',[Studentcontroller::class,'update'])->name('update.student');
    Route::get('delete-student/{id}',[Studentcontroller::class,'delete'])->name('delete.student');

    //course controller
    Route::get('add-course',[CourseController::class,'index'])->name('add.course');
    Route::post('new-course',[CourseController::class,'create'])->name('new.course');
    Route::get('manage-course',[CourseController::class,'manage'])->name('manage.course');
    Route::get('edit-course/{id}',[CourseController::class,'edit'])->name('edit.course');
    Route::post('update-course/{id}',[CourseController::class,'update'])->name('update.course');
    Route::get('delete-course/{id}',[CourseController::class,'delete'])->name('delete.course');



    //marks Controller
    Route::get('add-mark',[MarkController::class,'index'])->name('add.mark');
    Route::post('new-mark',[MarkController::class,'create'])->name('new.mark');
    Route::get('manage-mark',[MarkController::class,'manage'])->name('manage.mark');

});
