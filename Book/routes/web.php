<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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


Route::get('delete/{id}',[BookController::class , "destroy"]);
// Route::get('edit/{id}'[BookController::class , ""]);

// Route::resource('/', BookController::class);
// // Route::get('/', [BookController::class , "id{id}"]);

route::get('add',[BookController::class,'create']);
route::post('addbook',[BookController::class ,'store']);

// Route::get('edit/{id}',[BookController::class , "edit"]);

// Route::resource('addbook', BookController::class);
Route::get('edit/{id}',[BookController::class , "edit"]);
Route::post('/update/{id}',[BookController::class , "update"]);
// Route::get('/view', function () {
//     return view('view');
// });


// route::get('/view', [ books::class ,'index']);