<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\UserController;
use App\Http\controllers\AddTodo;

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
Route::get('/', [UserController::class, 'index'])->middleware('cors');
Route::post('add', [AddTodo::class, 'add'])->middleware('cors');
Route::delete('delete/{id}', [AddTodo::class, 'delete'])->middleware('cors');
