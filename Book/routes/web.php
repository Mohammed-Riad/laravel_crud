<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\usercontroller;

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


Route::get('/', [BookController::class , "index"]);
// Route::get('/', [usercontroller::class , "index"]);


Route::get('delete/{id}',[BookController::class , "destroy"]);



route::get('add',[BookController::class,'create']);
route::post('addbook',[BookController::class ,'store']);


Route::get('edit/{id}',[BookController::class , "edit"]);
Route::put('/update/{id}',[BookController::class , "update"]);




route::get('sign',[usercontroller::class,'create']);
route::post('regstare',[usercontroller::class ,'store']);



Route::get('login', [usercontroller::class, 'login'])->name('login');
Route::post('Login', [usercontroller::class, 'authenticate']);


Route::get("/logout" , [usercontroller::class, 'logout']);
