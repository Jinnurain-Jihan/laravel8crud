<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[CrudController::class,'showdata']);
Route::get('/add-data',[CrudController::class,'adddata']);
Route::post('/store-data',[CrudController::class,'storedata']);
Route::get('/edit-data/{id}',[CrudController::class,'editdata']);
Route::Post('/update-data/{id}',[CrudController::class,'updatedata']);
Route::get('/delete-data/{id}',[CrudController::class,'deletedata']);