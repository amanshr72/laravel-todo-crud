<?php

use App\Http\Controllers\Test;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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

route::get('testing', [Test::class,'testing']);
//route::get('testing1','App\Http\Controllers\Test@testing1'); // without adding { ->namespace('App\Http\Controllers') } in RouteServiceProvider.php
route::get('testing2','Test@testing2'); 


/* ------------------------------------------------------------------------------------------ */
Route::get('show', [TodoController::class, 'show']);

Route::get('create', [TodoController::class, 'create']);

Route::post('submit', [TodoController::class, 'store']);

Route::get('delete/{id}', [TodoController::class, 'destroy']);

Route::get('edit/{id}', [TodoController::class, 'edit']);

Route::post('update/{id}', [TodoController::class, 'update'])->name('todo.update');


